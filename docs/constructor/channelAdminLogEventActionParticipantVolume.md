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
			user_id : -1971497650527760382,
		),
		date : 81,
		active_date : 6,
		source : 43,
		volume : 1,
		about : 'OHfStrsKyGZ8hIUB',
		raise_hand_rating : 3352952625221602870,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'KRnJZaStTvrmxyhb',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'dLonS4YM02vyGfhE',
					sources : array(61),
				),
			),
			audio_source : 34,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'ArFInyTcRaB67Vpu',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'uieNRjDKB260AXWH',
					sources : array(65),
				),
			),
			audio_source : 30,
		),
		paid_stars_total : -3072231214246122919,
	),
);
```