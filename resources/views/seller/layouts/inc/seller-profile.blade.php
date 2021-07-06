<style>
.seller-profile{
    background: #9b9898;
    box-sizing: border-box;
    border-radius: 20px;
    border: 3px solid #343A40;
    height: 100%;
}
div.foto-profile{
    width: 50%;
    /* height: 124px; */
    background: #b9b8b8;
    border-radius: 20px 0 0 10px;
    font-variant: small-caps;
    display: flex;
}
label.foto{
    margin-left: 7%;
    padding-top: 8%;
    width: 18%;
}
img:nth-child(2){
    margin-top: 6px;
    margin-bottom: 2px;
    width: 110px;
    border-radius: 20px;
}
input[type=file]{
    padding-top: 8%;
    width: calc(50% - 18% + 110px);
    font-size: 15px;
    margin-left: 22px;
}
.form-seller-profile{
    display: flex;
}
.row-seller-profile label{
    font-variant: small-caps;
}
.row-seller-profile button{
    position: absolute;
    bottom: 10px;
    right: 20px;
    border: none;
    padding: 5px;
    border-radius: 10px;
}
</style>

<div class="seller-profile">
    <form action="" class="form-group form-seller-profile">
        <div class="foto-profile">
            <label for="" class="foto">Foto Profile :</label>
            <img src="{{ url('images/lonely-wolf.png') }}" alt="">
            <input type="file" name="" id="">
        </div>
        <div class="row ml-3 position-relative row-seller-profile">           
            <div class="col-md-3">
                <label for="">Unique Code :</label>
                <input type="text" class="form-control" readonly>
            </div>
            <div class="col-md-4">
                <label for="">Nama User :</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="">Level :</label>
                <select name="" id="" class="form-control">
                    <option value="" selected>Level</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                </select>
            </div>
            <button>Simpan</button>
        </div>
    </form>
</div>