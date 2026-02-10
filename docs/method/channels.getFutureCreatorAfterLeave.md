# channels.getFutureCreatorAfterLeave

**Layer** : 222

```tl
channels.getFutureCreatorAfterLeave#a00918af channel:InputChannel = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | NOTHING |

---

## Result

[User](type/User)

---

## Example

```php
$user = $client->channels->getFutureCreatorAfterLeave(
	channel : $client->get_input_channel(channel : '@LiveProto'),
);
```