# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 222

```tl
messages.translateResult#33db32f8 result:Vector<TextWithEntities> = messages.TranslatedText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`Vector<TextWithEntities>`](type/TextWithEntities) | Text+entities, for each input message |

---

## Type

[messages.TranslatedText](type/messages.TranslatedText)

---

## Example

```php
$messagesTranslatedText = $client->messages->translateResult(
	result : array(
		$client->textWithEntities(
			text : '4U1tlL27RCWOVc8s',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 16,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 37,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 71,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 16,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 40,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 97,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 24,
					language : 'WR6AX8b1rpM4luNd',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 55,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : 485713881354620828,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 17,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 12,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 35,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 6,
					document_id : 2451408643432702313,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 28,
				),
			),
		),
	),
);
```