# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 222

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
		id : 6990139688656287428,
		access_hash : -710215679471133092,
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
				user_id : -46074126674748142,
			),
			date : 39,
			active_date : 72,
			source : 46,
			volume : 46,
			about : 'MEpNqbInte9OyrK2',
			raise_hand_rating : -3755899447257799469,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'Dcpum7nybCMjxZ3Q',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'sL4uCzfYWVEZq7A3',
						sources : array(68),
					),
				),
				audio_source : 57,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'Q1XhYu96q5fSU2et',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'hYQzUjlgHWwnRKs4',
						sources : array(67),
					),
				),
				audio_source : 95,
			),
			paid_stars_total : -3640363973362946626,
		),
	),
	version : 94,
);
```