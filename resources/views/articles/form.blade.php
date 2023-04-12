@csrf
<div class="md-form">
    <label class="block font-bold md-2">タイトル</label>
    <input type="text" name="title" class="block w-full bg-gray-200 rounded py-2 px-3" required
        value="{{ old('title') }}">
</div>
<div class="form-group">
    <label class="block font-bold mb-2"></label>
    <textarea name="body" required class="block w-full bg-gray-200 rounded py-2 px-3 resize-none" rows="16"
        placeholder="本文">{{ old('body') }}</textarea>
</div>
