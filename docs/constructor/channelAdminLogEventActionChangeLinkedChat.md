# channelAdminLogEventActionChangeLinkedChat

**Description** : *The linked chat was changed*

**Layer** : 229

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
	prev_value : 3330259786006738687,
	new_value : 5501363381064395513,
);
```