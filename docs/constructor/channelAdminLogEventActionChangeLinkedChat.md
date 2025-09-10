# channelAdminLogEventActionChangeLinkedChat

**Description** : *The linked chat was changed*

**Layer** : 214

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
	prev_value : 8015160722435950985,
	new_value : -5456385731394575201,
);
```