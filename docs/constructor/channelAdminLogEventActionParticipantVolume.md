# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 218

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
			user_id : 329571651154786404,
		),
		date : 77,
		active_date : 71,
		source : 95,
		volume : 98,
		about : '5LHUN2mXd9lh7Ywx',
		raise_hand_rating : -1698426224802935226,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'AvIYzjdlue4E3Dfm',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'VZfN9KlenRaOTbQ3',
					sources : array(67),
				),
			),
			audio_source : 25,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'iadhBMDrXZVLSHUn',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'yxnXpVQT03NiHgrm',
					sources : array(20),
				),
			),
			audio_source : 18,
		),
		paid_stars_total : -7184086011146457920,
	),
);
```