# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 211

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
		id : 2727594774303601348,
		access_hash : -3928351882809348936,
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
				user_id : -2001214555808785956,
			),
			date : 28,
			active_date : 9,
			source : 31,
			volume : 18,
			about : 'N1K56AVrzXtCgsEb',
			raise_hand_rating : 2557469910174730964,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'RJ6yUaGYScCs29TX',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 100,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'CldxwSKaj5RPVvNg',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 35,
			),
		),
	),
	version : 99,
);
```