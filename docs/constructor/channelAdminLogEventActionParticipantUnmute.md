# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 227

```tl
channelAdminLogEventActionParticipantUnmute#e64429c0 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant that was unmuted |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantUnmute(
	participant : $client->groupCallParticipant(
		muted : true,
		left : true,
		can_self_unmute : true,
		just_joined : true,
		versioned : true,
		min : true,
		muted_by_you : true,
		volume_by_admin : true,
		self : true,
		video_joined : true,
		peer : $client->peerUser(
			user_id : 2188722016335448188,
		),
		date : 30,
		active_date : 62,
		source : 79,
		volume : 11,
		about : 'Hk1T4Zw6aFCUW8yR',
		raise_hand_rating : 3852662374787459340,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'eDwCKm4XbFzZvr1l',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'X2pNGt08asSYEUhL',
					sources : array(86),
				),
			),
			audio_source : 46,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'DIR8hU51FTa2lLcK',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'U1ax3qcbkRrphDi0',
					sources : array(70),
				),
			),
			audio_source : 90,
		),
		paid_stars_total : -7773225736667589378,
	),
);
```