# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 218

```tl
dialogFilterSuggested#77744d4a filter:DialogFilter description:string = DialogFilterSuggested;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter</mark> | [`DialogFilter`](type/DialogFilter) | Folder info |
| <mark>description</mark> | [`string`](type/string) | Folder description |

---

## Type

[DialogFilterSuggested](type/DialogFilterSuggested)

---

## Example

```php
$dialogFilterSuggested = $client->dialogFilterSuggested(
	filter : $client->dialogFilter(
		contacts : true,
		non_contacts : true,
		groups : true,
		broadcasts : true,
		bots : true,
		exclude_muted : true,
		exclude_read : true,
		exclude_archived : true,
		title_noanimate : true,
		id : 24,
		title : $client->textWithEntities(
			text : 'yHmcgPeJz9bRuBK0',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 67,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 88,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 31,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 1,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 3,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 19,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 0,
					language : '8vzgdMwCoalVI7xm',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 91,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 66,
					user_id : 4146019190912837474,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 94,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 32,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 44,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 62,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 63,
					document_id : -3515736831979269554,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 99,
				),
			),
		),
		emoticon : 'ctQfxsb16qMHF8Pm',
		color : 26,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : 'AkqIBG2sxVe1wMln',
);
```