# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 214

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
			user_id : -1875598257375488947,
		),
		date : 57,
		active_date : 16,
		source : 45,
		volume : 37,
		about : '8U6IYkRumqVpNXnt',
		raise_hand_rating : -7431088050087413371,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'mktUuXgPAEdJaMev',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 100,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '4JLcxe9Yrw0GFEza',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 21,
		),
	),
);
```