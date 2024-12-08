<x-form-select name="brand_id" label="Марка авто" :options=$brandsTitleWithId placeholder="Не выбрано" />
<x-form-input name="model" label="Модель авто" />
<x-form-select name="body_type" label="Тип кузова" :options=$bodyTypes placeholder="Не выбрано" />
<x-form-input name="vin" label="VIN номер" />
<x-form-select name="tags[]" label="Теги" :options=$tagsTitleWithId multiple many-relation placeholder="Не выбрано" />
<x-form-input name="price" label="Цена ₽" />