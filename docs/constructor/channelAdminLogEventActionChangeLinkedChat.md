# channelAdminLogEventActionChangeLinkedChat

**Description** : *The linked chat was changed*

**Layer** : 211

```tl
channelAdminLogEventActionChangeLinkedChat#50c7ac8 prev_value:long new_value:long = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`long`](type/long) | Previous linked chat |
| <mark>new_value</mark> | [`long`](type/long) | New linked chat |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeLinkedChat(
	prev_value : 8033267933903855978,
	new_value : -6030317989798419386,
);
```