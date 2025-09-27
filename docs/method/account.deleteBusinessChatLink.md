# account.deleteBusinessChatLink

**Description** : *Delete a business chat deep link &raquo;*

**Layer** : 216

```tl
account.deleteBusinessChatLink#60073674 slug:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Slug of the link, obtained as specified here » |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHATLINK_SLUG_EMPTY** | `400` | The specified slug is empty |
| **CHATLINK_SLUG_EXPIRED** | `400` | The specified business chat link has expired |

---

## Example

```php
$bool = $client->account->deleteBusinessChatLink(
	slug : 'b5aHrOXLpvQPmWdA',
);
```