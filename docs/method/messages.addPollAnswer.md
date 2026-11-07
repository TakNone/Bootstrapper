# messages.addPollAnswer

**Description** : *Add an answer option to an open\-answer poll &raquo;*

**Layer** : 233

```tl
messages.addPollAnswer#19bc4b6d peer:InputPeer msg_id:int answer:PollAnswer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the poll is located |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID of the poll |
| <mark>answer</mark> | [`PollAnswer`](type/PollAnswer) | The new answer option to add, use inputPollAnswer |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->addPollAnswer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 47,
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : 'sHKOXqbtD1pB3oFP',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 57,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 42,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 14,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 33,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 99,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 55,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 99,
					language : 'zRJqOKxMsVTfeanQ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 6,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : 5606721742357674550,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 0,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 41,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 91,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 92,
					document_id : -4980864691629363301,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 24,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 42,
					date : 44,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 91,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 38,
					old_text : 'eJQYmhvjfakAqXdc',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 65,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 96,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -4508691660091847903,
		),
		date : 4,
	),
);
```