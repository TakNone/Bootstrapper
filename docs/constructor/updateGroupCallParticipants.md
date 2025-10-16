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
		id : -1308433756726735518,
		access_hash : 6980001336379103076,
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
				user_id : -6008333297151713708,
			),
			date : 55,
			active_date : 95,
			source : 87,
			volume : 63,
			about : 'DrkzOBdmEsTPY1Qy',
			raise_hand_rating : -5264739774907038340,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : '04rk2dGeLjwX5ZfA',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 2,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'TGEAriaIdcHKoPeV',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 46,
			),
		),
	),
	version : 62,
);
```