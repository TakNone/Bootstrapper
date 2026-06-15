# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 227

```tl
channelAdminLogEventActionParticipantVolume#3e7f6847 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant whose volume was changed |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantVolume(
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
			user_id : -2356802152982352650,
		),
		date : 9,
		active_date : 16,
		source : 39,
		volume : 51,
		about : 'VCBWFoQMEYA84ewG',
		raise_hand_rating : 601411644357536340,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'uBEPTQjYi9nI8h4q',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'OUM0fTAJzRFLxQYk',
					sources : array(23),
				),
			),
			audio_source : 51,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'W61je2hUpJPqNYgi',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'J95pDztkcsPTRFm6',
					sources : array(80),
				),
			),
			audio_source : 66,
		),
		paid_stars_total : 5577114258794202862,
	),
);
```