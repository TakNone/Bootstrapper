# account.resolveBusinessChatLink

**Description** : *Resolve a business chat deep link &raquo;*

**Layer** : 218

```tl
account.resolveBusinessChatLink#5492e5ee slug:string = account.ResolvedBusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Slug of the link, obtained as specified here » |

---

## Result

[account.ResolvedBusinessChatLinks](type/account.ResolvedBusinessChatLinks)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHATLINK_SLUG_EMPTY** | `400` | The specified slug is empty |
| **CHATLINK_SLUG_EXPIRED** | `400` | The specified business chat link has expired |

---

## Example

```php
$accountResolvedBusinessChatLinks = $client->account->resolveBusinessChatLink(
	slug : 'K5QOy7n6Vf2lFDua',
);
```