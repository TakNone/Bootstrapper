# messages.addPollAnswer

**Description** : *Add an answer option to an open\-answer poll &raquo;*

**Layer** : 229

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
	msg_id : 70,
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : 'o5gy3iqJGsxZLzN7',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 88,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 85,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 75,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 100,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 25,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 36,
					language : '0kaqYhrxZ3jAMsS8',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 46,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 59,
					user_id : 7224822734040927790,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 77,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 56,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 46,
					document_id : -1149621015436645936,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 79,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 1,
					date : 50,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 31,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 58,
					old_text : 'zSxiOLVdMWuAtJm9',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 81,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : 4425517633145263064,
		),
		date : 90,
	),
);
```