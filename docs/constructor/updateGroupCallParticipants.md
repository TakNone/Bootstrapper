# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 216

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
		id : -7761477113972211659,
		access_hash : 7983348418677795557,
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
				user_id : 5790693233189637785,
			),
			date : 47,
			active_date : 98,
			source : 81,
			volume : 12,
			about : 'QnX53E7x24swz1u8',
			raise_hand_rating : 3239709624457458818,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'muEY9P0KAv8DSOUp',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 59,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'ZfP2srTM9jeQ8ShY',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 33,
			),
		),
	),
	version : 43,
);
```