# chatlists.checkChatlistInvite

**Description** : *Obtain information about a chat folder deep link &raquo;*

**Layer** : 222

```tl
chatlists.checkChatlistInvite#41c10fff slug:string = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | slug obtained from the chat folder deep link » |

---

## Result

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INVITE_SLUG_EMPTY** | `400` | The specified invite slug is empty |
| **INVITE_SLUG_EXPIRED** | `400` | The specified chat folder link has expired |

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->checkChatlistInvite(
	slug : 'CwR8AxMmNX5rY2j4',
);
```