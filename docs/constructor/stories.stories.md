# stories.stories

**Description** : *List of stories*

**Layer** : 222

```tl
stories.stories#63c3dd0a flags:# count:int stories:Vector<StoryItem> pinned_to_top:flags.0?Vector<int> chats:Vector<Chat> users:Vector<User> = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of stories that can be fetched |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |
| **pinned_to_top** | [`flags.0?Vector<int>`](type/int) | IDs of pinned stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.Stories](type/stories.Stories)

---

## Example

```php
$storiesStories = $client->stories->stories(
	count : 67,
	stories : array(
		$client->storyItemDeleted(
			id : 53,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 50,
			date : 53,
			expire_date : 38,
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
			id : 82,
			date : 89,
			from_id : $client->peerUser(
				user_id : 7124584234270835443,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 8672143637020574359,
				),
				from_name : 'O5WR8HrsBu21xDe7',
				story_id : 80,
			),
			expire_date : 72,
			caption : 'G5pTgiASvQtUe0lm',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 78,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 14,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 27,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 20,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 48,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 58,
					language : 'J8jDlEZ0x1mSXfhe',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 63,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 52,
					user_id : 6167755793523875080,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 84,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 51,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 14,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 34,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 64,
					document_id : 875370799597687882,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 43,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 1859970.740234375,
						y : 1054869.26953125,
						w : 1274466.9833984375,
						h : 2019703.3232421875,
						rotation : -1420888.1318359375,
						radius : 1826517.2255859375,
					),
					geo : $client->geoPointEmpty(),
					title : '8edPu7HxNKyTGStb',
					address : 'hiP9KUD1ze34Vpa6',
					provider : 'f8dpWY60RT32LQla',
					venue_id : 'oIN7vakX6q1QVYym',
					venue_type : 'XVT0iLes2mhPKNBU',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 1245893.6494140625,
						y : -122316.4677734375,
						w : -1470989.4912109375,
						h : 43207.11328125,
						rotation : -661363.103515625,
						radius : 1454427.70703125,
					),
					query_id : -2297280975163333499,
					result_id : '70CfjWOgZ4GeNiIK',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : 820286.7197265625,
						y : 1471633.521484375,
						w : 1343965.2607421875,
						h : 554701.5859375,
						rotation : 989229.8505859375,
						radius : -1157852.162109375,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'o3zEdJquPlwXTDSY',
						state : 'QRMJovHLFKASt4uw',
						city : 'N3FVcfnJ5KL6MxzG',
						street : 'e3wl40LkTQmZiS7M',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : 430677.7978515625,
						y : -385509.390625,
						w : -1084195.93359375,
						h : 1077467.00390625,
						rotation : 1716975.822265625,
						radius : -13759.712890625,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1281216.830078125,
						y : 1254760.123046875,
						w : -894304.125,
						h : 2053069.1181640625,
						rotation : -1769185.919921875,
						radius : -1168654.431640625,
					),
					channel_id : -8582433461579054306,
					msg_id : 75,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1354201.65625,
						y : 581442.3798828125,
						w : -1958324.8056640625,
						h : 109738.8671875,
						rotation : -415697.244140625,
						radius : 1693737.2958984375,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 20,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : 1182222.5830078125,
						y : 1323389.4375,
						w : -1862152.765625,
						h : -1444416.5546875,
						rotation : -952733.904296875,
						radius : 1639640.486328125,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -1339646.810546875,
						y : -1516216.97265625,
						w : 967936.91015625,
						h : -514019.7646484375,
						rotation : 767175.880859375,
						radius : 100606.6845703125,
					),
					emoji : 'SI8E9GRXWClLfdxu',
					temperature_c : -521439.4541015625,
					color : 41,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : 1384888.0673828125,
						y : -998555.763671875,
						w : -1199999.640625,
						h : 933900.1796875,
						rotation : -585600.3955078125,
						radius : -1384022.26171875,
					),
					slug : 'a0rBV8G2yRboQeHU',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-790531648513921976),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-6950791533939597661),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(8408673853157928969),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(3390850402194203429),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 19,
				forwards_count : 42,
				reactions : array(
					$client->reactionCount(
						chosen_order : 77,
						reaction : $client->reactionEmpty(...),
						count : 27,
					),
				),
				reactions_count : 26,
				recent_viewers : array(4833514102145910276),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(3),
		),
	),
	pinned_to_top : array(31),
	chats : array(
		$client->chatEmpty(
			id : -3144782981355485881,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7370609855143347992,
			title : 'GHzj4EkuxVmWeUs8',
			photo : $client->chatPhotoEmpty(),
			participants_count : 93,
			date : 28,
			version : 41,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 95,
			),
		),
		$client->chatForbidden(
			id : 1368530461250535295,
			title : 'X09KbeEifRcVp6hG',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 8140974623012070716,
			access_hash : 7261104388337198962,
			title : '6Yr8sJeojugNUl05',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1EIWOGbs9DtXMYgJ',
					reason : 'BN5k8hIdmToj7Hng',
					text : 'US376Gomn9QL1Ecj',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 47,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 18,
			),
			participants_count : 41,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 84,
			),
			color : $client->peerColor(
				color : 72,
				background_emoji_id : -1885654360906156970,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : 1673823209778908984,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 7,
			subscription_until_date : 48,
			bot_verification_icon : 7937876482000666953,
			send_paid_messages_stars : -6051876745029043189,
			linked_monoforum_id : -2224834603183916467,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 1504085649539692794,
			access_hash : -3340344950762580602,
			title : 'yRYlxt1pwhQSgCIJ',
			until_date : 73,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4671838691430591716,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			id : -7418572637945518438,
			access_hash : 5753138538106123970,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 50,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KzAEGbntajeLXMZN',
					reason : 'VfaDHmZUw6CQ8SPv',
					text : 'OzJWZuyESXcDPHjq',
				),
			),
			bot_inline_placeholder : 'Qgh97iyvD0RmPxsa',
			lang_code : 'O7PuMf5WRsAg1lkt',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 57,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 4563365848492704908,
			),
			profile_color : $client->peerColor(
				color : 29,
				background_emoji_id : -5608134338546815783,
			),
			bot_active_users : 41,
			bot_verification_icon : -1772863711539400246,
			send_paid_messages_stars : -8431189439769459551,
		),
	),
);
```