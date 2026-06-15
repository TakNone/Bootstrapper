# messageActionNoForwardsRequest

**Layer** : 227

```tl
messageActionNoForwardsRequest#3e2793ba flags:# expired:flags.0?true prev_value:Bool new_value:Bool = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **expired** | [`flags.0?true`](type/true) | NOTHING |
| <mark>prev_value</mark> | [`Bool`](type/Bool) | NOTHING |
| <mark>new_value</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionNoForwardsRequest(
	expired : true,
	prev_value : true,
	new_value : false,
);
```