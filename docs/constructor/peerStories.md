# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 229

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
		user_id : 1730475770921210035,
	),
	max_read_id : 32,
	stories : array(
		$client->storyItemDeleted(
			id : 32,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 86,
			date : 30,
			expire_date : 10,
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
			id : 11,
			date : 54,
			from_id : $client->peerUser(
				user_id : 1954972149703493963,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : -2285369295507774153,
				),
				from_name : 'm2HsKZ01NdTUI5Jb',
				story_id : 40,
			),
			expire_date : 54,
			caption : '1fkKLDTqQigeJuR4',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 10,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 98,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 44,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 39,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 15,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 60,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 47,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 71,
					language : 'sPF5gcNAj6QX7DJR',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 15,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : -2039505830145328078,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 79,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 37,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 32,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 37,
					document_id : 6988233461249532611,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 96,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 84,
					date : 31,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 44,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 99,
					old_text : 'VXK6iHFOy5sPmCtI',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 30,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -1097127.79296875,
						y : 71443.1083984375,
						w : 892566.62890625,
						h : -843961.66796875,
						rotation : 1972344.5478515625,
						radius : 1563950.482421875,
					),
					geo : $client->geoPointEmpty(),
					title : '38k4sqOx1lmENUCL',
					address : 'pDECrda23eKJHPTY',
					provider : 'PGxSZvil2H0CyLue',
					venue_id : 'JZozIbd36GWDjY8A',
					venue_type : '10KNepFnPR26sjat',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -962010.3310546875,
						y : 1919395.193359375,
						w : -1389420.1865234375,
						h : 1239111.6884765625,
						rotation : 591402.6376953125,
						radius : -1148859.7138671875,
					),
					query_id : -3176733131742993987,
					result_id : 'cA3ULJbwK824ao1W',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : -1118157.2998046875,
						y : 195325.9775390625,
						w : 1885989.841796875,
						h : 433254.2470703125,
						rotation : -784180.0185546875,
						radius : -948302.1142578125,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'j9oaPGQY6qEkxT3X',
						state : '4bYoaM2P9mQCsdry',
						city : 'og3BdDvejH7Aqzih',
						street : '6geVmpOuSCEYj51c',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : -188166.2490234375,
						y : -300917.5146484375,
						w : 2023685.5439453125,
						h : -1123043.5224609375,
						rotation : 593911.7197265625,
						radius : -1584532.08203125,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1413559.634765625,
						y : -485784.9638671875,
						w : 648099.1650390625,
						h : 2002700.2109375,
						rotation : -806068.0576171875,
						radius : 1132281.3232421875,
					),
					channel_id : -346767124536512268,
					msg_id : 89,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -1580324.0673828125,
						y : 235463.03515625,
						w : -1699111.953125,
						h : -935715.7822265625,
						rotation : -471840.9814453125,
						radius : 904486.26953125,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 61,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : 810367.4462890625,
						y : 1030487.013671875,
						w : 1318470.5703125,
						h : -822081.6826171875,
						rotation : 364309.10546875,
						radius : -1703450.9287109375,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -1418023.1787109375,
						y : -720914.2470703125,
						w : 561507.8720703125,
						h : 1991877.8046875,
						rotation : -1152650.6728515625,
						radius : -386699.1630859375,
					),
					emoji : 'OZlAWPY31tnfVGEc',
					temperature_c : 526785.44921875,
					color : 76,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : 1922596.119140625,
						y : -863713.341796875,
						w : 1577736.3193359375,
						h : -237067.5283203125,
						rotation : -1992655.4169921875,
						radius : 1914373.91796875,
					),
					slug : 'tChVpiOQlbqjG4aU',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7541251551330188471),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-7077249989733362096),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(778043335857493839),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(1235396219768481945),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 10,
				forwards_count : 12,
				reactions : array(
					$client->reactionCount(
						chosen_order : 76,
						reaction : $client->reactionEmpty(...),
						count : 25,
					),
				),
				reactions_count : 93,
				recent_viewers : array(1171539369458220918),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(33),
			music : $client->documentEmpty(
				id : 5664054489624480548,
			),
		),
	),
);
```