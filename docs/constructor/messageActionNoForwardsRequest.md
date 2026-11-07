# messageActionNoForwardsRequest

**Description** : *Emitted only in private chats if the other side requested to disable content protection &raquo;*

**Layer** : 233

```tl
messageActionNoForwardsRequest#3e2793ba flags:# expired:flags.0?true prev_value:Bool new_value:Bool = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **expired** | [`flags.0?true`](type/true) | If set, this request was accepted or rejected by the other user and thus cannot be used anymore |
| <mark>prev_value</mark> | [`Bool`](type/Bool) | Previous protection status |
| <mark>new_value</mark> | [`Bool`](type/Bool) | New requested protection status |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionNoForwardsRequest(
	expired : true,
	prev_value : false,
	new_value : true,
);
```