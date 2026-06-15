# messages.addPollAnswer

**Layer** : 227

```tl
messages.addPollAnswer#19bc4b6d peer:InputPeer msg_id:int answer:PollAnswer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>answer</mark> | [`PollAnswer`](type/PollAnswer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->addPollAnswer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 43,
	answer : $client->pollAnswer(
		text : $client->textWithEntities(
			text : 'QdjYDhSp5wrFstVm',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 9,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 22,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 25,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 69,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 25,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 29,
					language : 'VlZYxp2cmEbLaroO',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 38,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 4,
					user_id : 725849983627542492,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 86,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 27,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 57,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 87,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 87,
					document_id : -6212627848072937926,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 19,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 40,
					date : 61,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 41,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 5,
					old_text : 'UscfWHu6LAmIGZvP',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 98,
				),
			),
		),
		option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		media : $client->messageMediaEmpty(),
		added_by : $client->peerUser(
			user_id : -6284088778242777479,
		),
		date : 42,
	),
);
```