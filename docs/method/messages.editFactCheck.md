# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 227

```tl
messages.editFactCheck#589ee75 peer:InputPeer msg_id:int text:TextWithEntities = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the message was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Fact-check (maximum UTF-8 length specified in appConfig.factcheck_length_limit) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ACTION_FORBIDDEN** | `403` | You cannot execute this action |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->editFactCheck(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 94,
	text : $client->textWithEntities(
		text : '1UiTMCEXyn3zNtc9',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 74,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 54,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 43,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 81,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 5,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 2,
				language : 'MZ2S3YJ7UVBpuECv',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 74,
				user_id : 8869566556539451386,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 46,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 57,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 50,
				document_id : 5815675396269841405,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 41,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 22,
				date : 60,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 93,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 65,
				old_text : 'mEZYsnAQjRNMiaP4',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 42,
			),
		),
	),
);
```