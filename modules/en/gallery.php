<style>
.galeria {
    position: relative;
    width: 100%;
    display: flex;
    gap: 10px;
    padding: 100px 2vw;
}

.column {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.post {
    position: relative;
    overflow: hidden;
    width: 100%;
}

img {
    width: 100%;
    border-radius: 5px;
    height: 100%;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #161616;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: 0.5s;
    border-radius: 5px;
}

.post:hover .overlay {
    opacity: 0.5;
    cursor: pointer;
}
</style>

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(/assets/images/breadcrumb/breadcrumb-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="breadcrumb-menu wow slideInDown animated" data-wow-delay="0.3s"
                        data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Gallery</li>
                        </ul>
                    </div>
                    <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<div class="container-fluid">
    <div class="galeria">

    </div>
</div>