<?php
class Post
{

    public $id;
    public $title;
    public $description;
    public $image;
    public $status;
    public $date;

    function __construct($id = '', $title = '', $description = '',$image = '', $status = '', $date = '')
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->status = $status;
        $this->date = $date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM posts');
        foreach ($req->fetchAll() as $item) {
            $list[] = new Post($item['id'], $item['title'], $item['description'], $item['image'], $item['status'], $item['date']);
        }

        return $list;
    }

    static function create($title, $description, $image, $status, $date)
    {
        $db = DB::getInstance();
        $query = "INSERT INTO posts SET title=:title, description=:description,image=:image, status=:status,date=:date";
        // prepare query for execution
        $stmt = $db->prepare($query);
        // bind the parameters
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':date', $date);
        // Execute the query
        if($stmt->execute()){
            echo "<div class='alert alert-success'>Record was saved.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to save record.</div>";
        }
    }

    static function update($id,$title, $description, $image, $status, $date)
    {
        $db = DB::getInstance();
        $query = "update posts SET title=:title, description=:description,image=:image, status=:status,date=:date WHERE id = :id";
        // prepare query for execution
        $stmt = $db->prepare($query);
        // bind the parameters
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':date', $date);
        // Execute the query
        if($stmt->execute()){
            echo "<div class='alert alert-success'>Record was saved.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to save record.</div>";
        }
    }


    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
        $req->execute(array('id' => $id));
        $item = $req->fetch();
        if (isset($item['id'])) {
            return new Post($item['id'], $item['title'], $item['description'], $item['image'], $item['status'], $item['date']);
        }
        return null;
    }

    static function delete($id){
        $db = DB::getInstance();
        $query = 'delete FROM posts WHERE id = :id';
        // prepare query for execution
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $success = $stmt->execute();
        return ($success);
    }

    public function toArray() {
        return [
            "title" => $this->getTitle(),
            "description" => $this->getDescription(),
            "image" => $this->getImage(),
            "status" => $this->getStatus(),
            "date" => $this->getDate(),
        ];
    }
}