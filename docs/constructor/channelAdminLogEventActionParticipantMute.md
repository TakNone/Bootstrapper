# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 225

```tl
channelAdminLogEventActionParticipantMute#f92424d2 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant that was muted |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantMute(
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
			user_id : 1403703279828459250,
		),
		date : 44,
		active_date : 25,
		source : 46,
		volume : 64,
		about : '6AjT0bGCLelV5qJB',
		raise_hand_rating : -8886393298057452726,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'W2VuJbnazrRTjYx7',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'j62YLfshcqH3OAdu',
					sources : array(19),
				),
			),
			audio_source : 13,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'fzetEkMywjpvT61d',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'RnGBUbevw0Ax35JW',
					sources : array(10),
				),
			),
			audio_source : 98,
		),
		paid_stars_total : -845798189829690718,
	),
);
```