# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 225

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
			user_id : 3001696546745367985,
		),
		date : 100,
		active_date : 62,
		source : 0,
		volume : 17,
		about : 'RLQBAwaVqZCrzkX7',
		raise_hand_rating : 6957781966546418073,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'P4BVbIEOcfFHKZ90',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : '81SxerP2YWLaEFi9',
					sources : array(2),
				),
			),
			audio_source : 78,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '9zryoK5Vu6nQAmUI',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'XHvAtLdMPrgcKBTz',
					sources : array(78),
				),
			),
			audio_source : 38,
		),
		paid_stars_total : 7051701334093149957,
	),
);
```