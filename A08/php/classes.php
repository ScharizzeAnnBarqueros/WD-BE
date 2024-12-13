<?php
class islandCard
{
    public $islandID;
    public $name;
    public $shortDesc;
    public $color;
    public $islandImage;

    // Constructor
    public function __construct($islandID, $name, $shortDesc, $color, $islandImage)
    {
        $this->islandID = $islandID;
        $this->name = $name;
        $this->shortDesc = $shortDesc;
        $this->color = $color;
        $this->islandImage = $islandImage;

    }
    public function buildCard()
    {
        return '
        <div class="card rounded-3 p-5 m-5 col-md-4 col-sm-8 col-12" style="background-color:' . $this->color . ';">
            <a href="view.php?id=' . $this->islandID . '" class="text-decoration-none" style="color: #000;">
                <h3 style="text-align: center; color: #000;">' . $this->name . '</h3>
                <p style="text-align: center; color: #000;">' . $this->shortDesc . '</p>
            </a>
        </div>
    ';
    
    }



}


class islandContent
{
    public $islandID;
    public $islandName;
    public $contentImage;
    public $content;
    public $description;


    public function __construct($islandID, $islandName, $contentImage, $content, $description)
    {
        $this->islandID = $islandID;
        $this->islandName = $islandName;
        $this->contentImage = $contentImage;
        $this->content = $content;
        $this->description = $description;

    }

    public function createContent()
    {
        return '
        <div class="col-lg-4 col-md-10 col-12 py-3">
          <div class="card rounded-3 p-3" style="display: flex; flex-direction: column; height: 550px; padding: 0; box-sizing: border-box;">
            <img src="assets/img/'.$this->contentImage.'" style="width:100%; height:300px; object-fit:cover; box-sizing: border-box;">
            <p style="text-align:center; margin-top: 5%; padding:5%; flex-grow: 1;">' . $this->content . '</p>
          </div>
        </div>
      ';
      
    }
}
?>