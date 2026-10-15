# channelAdminLogEventActionChangeProfilePeerColor

**Description** : *The profile accent color was changed*

**Layer** : 229

```tl
channelAdminLogEventActionChangeProfilePeerColor#5e477b25 prev_value:PeerColor new_value:PeerColor = ChannelAdminLogEventAction;
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
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeProfilePeerColor(
	prev_value : $client->peerColor(
		color : 8,
		background_emoji_id : -316265854667483378,
	),
	new_value : $client->peerColor(
		color : 95,
		background_emoji_id : -3490222734022486158,
	),
);
```