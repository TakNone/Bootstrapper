# inputGroupCallSlug

**Description** : *Join a conference call through an invitation link &raquo;*

**Layer** : 222

```tl
inputGroupCallSlug#fe06823f slug:string = InputGroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Slug from the conference link » |

---

## Type

[InputGroupCall](type/InputGroupCall)

---

## Example

```php
$inputGroupCall = $client->inputGroupCallSlug(
	slug : 'vgTEVd7rmkjw5oJl',
);
```