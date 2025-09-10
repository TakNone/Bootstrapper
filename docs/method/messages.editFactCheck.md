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
	msg_id : 16,
	text : $client->textWithEntities(
		text : 'd38kjQwfNGXHsvZo',
		entities : array(
			$client->messageEntityUnknown(
				offset : 65,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 50,
				length : 36,
			),
			$client->messageEntityHashtag(
				offset : 15,
				length : 9,
			),
			$client->messageEntityBotCommand(
				offset : 91,
				length : 86,
			),
			$client->messageEntityUrl(
				offset : 62,
				length : 14,
			),
			$client->messageEntityEmail(
				offset : 65,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 28,
				length : 83,
			),
			$client->messageEntityItalic(
				offset : 46,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 73,
				length : 34,
			),
			$client->messageEntityPre(
				offset : 56,
				length : 43,
				language : 'izjESQwdM6laTs1m',
			),
			$client->messageEntityTextUrl(
				offset : 65,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 32,
				length : 94,
				user_id : -2790321809677072803,
			),
			$client->inputMessageEntityMentionName(
				offset : 47,
				length : 95,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 88,
				length : 39,
			),
			$client->messageEntityCashtag(
				offset : 13,
				length : 64,
			),
			$client->messageEntityUnderline(
				offset : 9,
				length : 77,
			),
			$client->messageEntityStrike(
				offset : 97,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 73,
				length : 72,
			),
			$client->messageEntitySpoiler(
				offset : 96,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 69,
				length : 21,
				document_id : 2154055690128228867,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 5,
				length : 86,
			),
		),
	),
);
```