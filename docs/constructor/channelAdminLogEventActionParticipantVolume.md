# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 222

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
			user_id : 6450521158515518706,
		),
		date : 77,
		active_date : 7,
		source : 2,
		volume : 78,
		about : 'GChIyLVUNigD9Hs0',
		raise_hand_rating : 3006269089678396657,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'ESvsfR5UPC3GXNhA',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'gRldInapGzmyrxVu',
					sources : array(88),
				),
			),
			audio_source : 34,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'zZibMSKBsct4hOAo',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : '9O1EIaciKgNuVw8h',
					sources : array(96),
				),
			),
			audio_source : 88,
		),
		paid_stars_total : 2482655123903141958,
	),
);
```