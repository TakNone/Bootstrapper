# stories.stories

**Description** : *List of stories*

**Layer** : 218

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
	count : 68,
	stories : array(
		$client->storyItemDeleted(
			id : 90,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 63,
			date : 47,
			expire_date : 56,
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
			id : 40,
			date : 79,
			from_id : $client->peerUser(
				user_id : 3850538390368374528,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 7172333681647857162,
				),
				from_name : 'kFVXTUxnl8CQa6YP',
				story_id : 23,
			),
			expire_date : 58,
			caption : 'sQmo2i5IjtYnMJ49',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 85,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 30,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 20,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 22,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : 'ujReBoSnsyVIDGlN',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 84,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : -9055411523636185288,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 90,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 22,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 10,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 90,
					document_id : 73679869676817172,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 77,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -919542.08203125,
						y : -1118280.7919921875,
						w : -1202904.4775390625,
						h : -488695.576171875,
						rotation : 143417.21875,
						radius : -1556485.5859375,
					),
					geo : $client->geoPointEmpty(),
					title : '1nIMECXapBOhlgQY',
					address : 'hns8rM2mLtEdvzZl',
					provider : 'NVTMs8PryUvKLwmk',
					venue_id : '7gVpUZXmd5IyjzS2',
					venue_type : 'urUI901TOcsCNxnR',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -1640790.84375,
						y : -957606.9775390625,
						w : -1710360.603515625,
						h : -1717959.6806640625,
						rotation : 1700576.7119140625,
						radius : -829309.236328125,
					),
					query_id : 7139368585600169486,
					result_id : 'yAOZJYoVM59jT0wS',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : -1961005.822265625,
						y : 776472.0751953125,
						w : -719495.0498046875,
						h : 1065141.0380859375,
						rotation : -1730181.115234375,
						radius : -1011969.275390625,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'e5743bJTOclLuWts',
						state : 'TX7Lm3IraUxoevV4',
						city : 'J5Ke81BUnNaLoMkQ',
						street : 'SX5kNR3KEBZ8Fjvr',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : -1797895.9306640625,
						y : -29159.4931640625,
						w : 1005149.3310546875,
						h : 259313.2578125,
						rotation : -449559.3388671875,
						radius : 33137.46875,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1524450.6552734375,
						y : -1685544.29296875,
						w : 1506503.4072265625,
						h : 893470.583984375,
						rotation : -6405.9443359375,
						radius : -811920.6669921875,
					),
					channel_id : -5373154149779536798,
					msg_id : 81,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1458450.3447265625,
						y : -1373706.41015625,
						w : -119760.0888671875,
						h : -411651.0244140625,
						rotation : -1073965.728515625,
						radius : -1279995.8369140625,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 86,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : 1019846.1064453125,
						y : 1033327.59375,
						w : 1641112.4560546875,
						h : -1097122.267578125,
						rotation : -39621.0810546875,
						radius : 1311500.0654296875,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : 1478888.0712890625,
						y : 1194665.373046875,
						w : -162583.345703125,
						h : 1601385.271484375,
						rotation : 1378521.0390625,
						radius : -2080050.09765625,
					),
					emoji : 'TogVSHMPF1vmXw9D',
					temperature_c : 1310372.978515625,
					color : 73,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : -1401187.8720703125,
						y : -201657.0205078125,
						w : 1482462.4892578125,
						h : -1096735.94140625,
						rotation : 1263619.32421875,
						radius : 1138929.0234375,
					),
					slug : 'O7pGcN0v3kx6owlt',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-2362882111684009373),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(9204541619943400056),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(4102451161784578170),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(8839745494689056074),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 24,
				forwards_count : 97,
				reactions : array(
					$client->reactionCount(
						chosen_order : 81,
						reaction : $client->reactionEmpty(...),
						count : 73,
					),
				),
				reactions_count : 78,
				recent_viewers : array(-4015133950387048853),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(94),
		),
	),
	pinned_to_top : array(3),
	chats : array(
		$client->chatEmpty(
			id : 3477315554516379681,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5545883517306410788,
			title : '6AfovwKX8TnPZSIO',
			photo : $client->chatPhotoEmpty(),
			participants_count : 53,
			date : 52,
			version : 32,
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
				until_date : 55,
			),
		),
		$client->chatForbidden(
			id : -5444635645750259367,
			title : 'flsWdLVE8u4BGbHS',
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
			id : 1156603143986050097,
			access_hash : 4983807377936922271,
			title : 'gSM2PFxDmlq7JOvZ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3Cu9gqK2bVhst5Rx',
					reason : '8WIlfGpcdzaTsSFy',
					text : '1ZvU0yrxuwTqglnt',
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
				until_date : 33,
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
				until_date : 7,
			),
			participants_count : 60,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 86,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -8062116580610798490,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 905499246163135696,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 16,
			subscription_until_date : 71,
			bot_verification_icon : -6923696764294616765,
			send_paid_messages_stars : 5842736711674117225,
			linked_monoforum_id : 3886089446306112013,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8970242617992428245,
			access_hash : 4550288398070320100,
			title : '6GVjdBbFZpiKyP9w',
			until_date : 76,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6512984084841810835,
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
			id : -8945049857586848437,
			access_hash : -7099638754212446520,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fy2aOe9KUZtVlMx0',
					reason : '6mEuH1dn2gcy3MLj',
					text : 'bnjCRFay1H6lx5m0',
				),
			),
			bot_inline_placeholder : 'k8UJwf1MBzYCbaO3',
			lang_code : 'Jh1ZlrgpbHjMBX2Q',
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
				max_id : 32,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 1654624966638614821,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 3816198398052013827,
			),
			bot_active_users : 89,
			bot_verification_icon : -4368349296550028518,
			send_paid_messages_stars : -3869854081426217870,
		),
	),
);
```