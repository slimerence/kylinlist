<style scoped>
    .avatar-uploader .el-upload {
        border: 1px dashed #d9d9d9;
        border-radius: 6px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        width: 100%;
    }
    .avatar-uploader .el-upload:hover {
        border-color: #409EFF;
    }
    .avatar-uploader-icon {
        font-size: 28px;
        color: #8c939d;
        width: 100%;
        height: 178px;
        line-height: 178px;
        text-align: center;
    }
    .el-avatar {
        width: 100%;
        height: 178px;
        display: block;
    }
</style>
<script>
    new Vue({
        el: '#app',
        data() {
            return {
                @if(!is_null($supplier->getProfileImage()))
                imageUrl: '{{ $supplier->getProfileImage()->url }}',
                @else
                imageUrl: '',
                @endif
            };
        },

        methods: {
            handleAvatarSuccess(res, file) {
                this.imageUrl = URL.createObjectURL(file.raw);
            },
            beforeAvatarUpload(file) {
                const isJPG = file.type === 'image/jpeg';
                const isLt2M = file.size / 1024 / 1024 < 2;

                if (!isJPG) {
                    this.$message.error('上传头像图片只能是 JPG 格式!');
                }
                if (!isLt2M) {
                    this.$message.error('上传头像图片大小不能超过 2MB!');
                }
                return isJPG && isLt2M;
            }
        }
    })
</script>
