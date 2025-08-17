# bots.reorderUsernames

**Description** : *Reorder usernames associated to a bot we own*

**Layer** : 211

```tl
bots.reorderUsernames#9709b1c2 bot:InputUser order:Vector<string> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot |
| <mark>order</mark> | [`Vector<string>`](type/string) | The new order for active usernames. All active usernames must be specified |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **USERNAME_NOT_MODIFIED** | `400` | The username was not modified |

---

## Example

```php
$bool = $client->bots->reorderUsernames(
	bot : $client->inputUserEmpty(),
	order : array('a4KARsnOJYqzMufc'),
);
```