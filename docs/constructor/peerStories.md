# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 222

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| **max_read_id** | [`flags.0?int`](type/int) | If set, contains the ID of the maximum read story |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |

---

## Type

[PeerStories](type/PeerStories)

---

## Example

```php
$peerStories = $client->peerStories(
	peer : $client->peerUser(
		user_id : -4391374135293079077,
	),
	max_read_id : 26,
	stories : array(
		$client->storyItemDeleted(
			id : 22,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 86,
			date : 89,
			expire_date : 87,
		),
		$client->storyItem(
			pinned : true,
			public : true,
			close_friends : true,
			min : true,
			noforwards : true,
			edited : true,
			contacts : true,
			selected_contacts : true,
			out : true,
			id : 29,
			date : 73,
			from_id : $client->peerUser(
				user_id : 2349371848046914261,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 4838425396575446641,
				),
				from_name : 'UM6lvpi2fV0KoJT4',
				story_id : 13,
			),
			expire_date : 7,
			caption : 'wrQecFvd3I1zG0Es',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 59,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 82,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 32,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 34,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 64,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 73,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 81,
					language : 'PKaZX0p1j6EsM42G',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 72,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : 5273907380677288554,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 67,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 85,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 39,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 76,
					document_id : -5868055910680004244,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 93,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -812638.9931640625,
						y : 1047036.4970703125,
						w : -999208.228515625,
						h : -1875928.5234375,
						rotation : -18724.31640625,
						radius : 1729108.2763671875,
					),
					geo : $client->geoPointEmpty(),
					title : 'fng5D3eQ6pPWdLsB',
					address : 'A1a6uivyx045rDPS',
					provider : 'gznfbLO1CYMvrJXh',
					venue_id : 'O6czfpNiG2CFd3Qe',
					venue_type : '6TJzAE8iouY0lKtc',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -808952.63671875,
						y : 1901464.083984375,
						w : 197376.16015625,
						h : -71744.3251953125,
						rotation : -77483.1669921875,
						radius : -820704.03515625,
					),
					query_id : 6671478263131342064,
					result_id : 'IgLQe96moiJq13dk',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : 1379801.5927734375,
						y : -2022110.57421875,
						w : -1466576.8037109375,
						h : 727101.728515625,
						rotation : -22449.1533203125,
						radius : 1396990.2080078125,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'W8ejNoQbHD5tq7YF',
						state : 'gQ06HNx4WOw2XpkJ',
						city : 'XS54i0FjJoWZkbxH',
						street : 'IQG9JatWU2kdOznZ',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : 1429313.8486328125,
						y : 905690.4267578125,
						w : 329533.4814453125,
						h : -2050858.21484375,
						rotation : -496953.3076171875,
						radius : 1971238.8740234375,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 471886.505859375,
						y : 1752087.4775390625,
						w : -1564712.4658203125,
						h : -636459.8564453125,
						rotation : -583716.44921875,
						radius : -104731.712890625,
					),
					channel_id : -4016523192412421037,
					msg_id : 1,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -492542.6865234375,
						y : 1656223.6552734375,
						w : -830325.1416015625,
						h : 716849.810546875,
						rotation : 1337318.3134765625,
						radius : -1805125.7763671875,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 38,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : -448374.4072265625,
						y : -1316461.3896484375,
						w : 1515388.1474609375,
						h : -1151869.00390625,
						rotation : 775765.9873046875,
						radius : 1768423.708984375,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : 1635739.9697265625,
						y : -1974017.1318359375,
						w : -928784.462890625,
						h : -1988701.138671875,
						rotation : -1133241.6162109375,
						radius : 1146661.9462890625,
					),
					emoji : 'W5k3wDlfKAFmg9vR',
					temperature_c : 1717793.7822265625,
					color : 16,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : 1000362.3251953125,
						y : -1637856.529296875,
						w : 1561088.263671875,
						h : 1582989.6826171875,
						rotation : 1979482.9013671875,
						radius : 1572961.7041015625,
					),
					slug : '9HSOiGyEh0X7zlpc',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-5883832897094100994),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(7087720426853002427),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(6588693129348967418),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-2595095550573880927),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 17,
				forwards_count : 99,
				reactions : array(
					$client->reactionCount(
						chosen_order : 86,
						reaction : $client->reactionEmpty(...),
						count : 42,
					),
				),
				reactions_count : 37,
				recent_viewers : array(-6524998303803661252),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(8),
		),
	),
);
```