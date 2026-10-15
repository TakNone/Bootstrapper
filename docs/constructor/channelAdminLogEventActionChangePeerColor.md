# channelAdminLogEventActionChangePeerColor

**Description** : *The message accent color was changed*

**Layer** : 229

```tl
channelAdminLogEventActionChangePeerColor#5796e780 prev_value:PeerColor new_value:PeerColor = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`PeerColor`](type/PeerColor) | Previous accent palette |
| <mark>new_value</mark> | [`PeerColor`](type/PeerColor) | New accent palette |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangePeerColor(
	prev_value : $client->peerColor(
		color : 64,
		background_emoji_id : 3260905118975844868,
	),
	new_value : $client->peerColor(
		color : 83,
		background_emoji_id : -930521563624904609,
	),
);
```