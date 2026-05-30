# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 222

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
		id : 54,
		title : $client->textWithEntities(
			text : 'oZaeBzM4mk5OYjWH',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 28,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 8,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 8,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 29,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 38,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 23,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 32,
					language : 'CHyifzMseG53q9um',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 28,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 30,
					user_id : -7189736542027121777,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 94,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 10,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 14,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 35,
					document_id : 802987936429140078,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 35,
				),
			),
		),
		emoticon : 'NbF562flVegSzKi3',
		color : 94,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : 'wGNTQ8ZVo1u6Yrq3',
);
```