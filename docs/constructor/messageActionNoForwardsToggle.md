# messageActionNoForwardsToggle

**Description** : *Emitted only in private chats when enabling or disabling content protection &raquo;*

**Layer** : 233

```tl
messageActionNoForwardsToggle#bf7d6572 prev_value:Bool new_value:Bool = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`Bool`](type/Bool) | Previous protection status (if true, the chat was protected). May be equal to new_value when replying to requests, see here » for more info on the full flow |
| <mark>new_value</mark> | [`Bool`](type/Bool) | New protection status |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionNoForwardsToggle(
	prev_value : true,
	new_value : false,
);
```