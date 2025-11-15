# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 218

```tl
updateGroupCallParticipants#f2ebdb4e call:InputGroupCall participants:Vector<GroupCallParticipant> version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | New participant list |
| <mark>version</mark> | [`int`](type/int) | Version |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallParticipants(
	call : $client->inputGroupCall(
		id : 1222272343088805243,
		access_hash : 6098244756806725170,
	),
	participants : array(
		$client->groupCallParticipant(
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
				user_id : 7874779328729387482,
			),
			date : 77,
			active_date : 31,
			source : 3,
			volume : 27,
			about : 'PBtA8Jkmifd5zWn2',
			raise_hand_rating : 7050213921539910114,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'yPGfJgZESUnk7K5H',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'PeEQp3VwYJsIr89h',
						sources : array(10),
					),
				),
				audio_source : 22,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'fOPeyqtJwcCYZ17I',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'JmwkRDOxLvA7uKcS',
						sources : array(27),
					),
				),
				audio_source : 95,
			),
			paid_stars_total : -7645355111555968345,
		),
	),
	version : 79,
);
```