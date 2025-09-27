# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 214

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
	peer : $client->inputPeerEmpty(),
	msg_id : 54,
	text : $client->textWithEntities(
		text : 'TQSkLiIsWheap8Yl',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 53,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 71,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 91,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 85,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 12,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 45,
				language : 'Bi742gEFeVxzIbAT',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 46,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : 5769257764904783547,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 82,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 35,
				document_id : 5506310091936107304,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
		),
	),
);
```