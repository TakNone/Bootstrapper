# stories.stories

**Description** : *List of stories*

**Layer** : 211

```tl
stories.stories#63c3dd0a flags:# count:int stories:Vector<StoryItem> pinned_to_top:flags.0?Vector<int> chats:Vector<Chat> users:Vector<User> = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 16,
	stories : array(
		$client->storyItemDeleted(
			id : 50,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 47,
			date : 14,
			expire_date : 70,
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
			id : 53,
			date : 88,
			from_id : $client->peerUser(
				user_id : -7757090858333818922,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'epDvc2M36B1CoJYx',
				story_id : 95,
			),
			expire_date : 38,
			caption : 'oTyxEMhFidj79PSC',
			entities : array(
				$client->messageEntityUnknown(
					offset : 20,
					length : 14,
				),
				$client->messageEntityMention(
					offset : 88,
					length : 10,
				),
				$client->messageEntityHashtag(
					offset : 2,
					length : 81,
				),
				$client->messageEntityBotCommand(
					offset : 17,
					length : 43,
				),
				$client->messageEntityUrl(
					offset : 43,
					length : 41,
				),
				$client->messageEntityEmail(
					offset : 71,
					length : 42,
				),
				$client->messageEntityBold(
					offset : 10,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 61,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 99,
					length : 17,
				),
				$client->messageEntityPre(
					offset : 54,
					length : 52,
					language : 'TdQkWYGhogHB0zCA',
				),
				$client->messageEntityTextUrl(
					offset : 38,
					length : 99,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 74,
					length : 48,
					user_id : 1831514491771507115,
				),
				$client->inputMessageEntityMentionName(
					offset : 29,
					length : 82,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 5,
					length : 7,
				),
				$client->messageEntityCashtag(
					offset : 44,
					length : 93,
				),
				$client->messageEntityUnderline(
					offset : 100,
					length : 40,
				),
				$client->messageEntityStrike(
					offset : 42,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 59,
					length : 11,
				),
				$client->messageEntitySpoiler(
					offset : 26,
					length : 24,
				),
				$client->messageEntityCustomEmoji(
					offset : 75,
					length : 6,
					document_id : -559915523129104108,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 65,
					length : 74,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'irO1AW5huIa9lH0M',
					address : 'e4vD2uZjABFdb5YL',
					provider : '3BhmTnj0sQdzcHCu',
					venue_id : 'YjW2HuqkFzvsgt1Q',
					venue_type : 'XAYH4qx6cprNsKod',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -2216768894242113200,
					result_id : 'zHSjMtADrNGOl13Y',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					address : $client->geoPointAddress(...),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(...),
					reaction : $client->reactionEmpty(...),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel_id : -135585574393038945,
					msg_id : 92,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 99,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'eF8jb9TVIk6nygGJ',
					temperature_c : -1712043.2119140625,
					color : 46,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'RSijc5H3sUxC8907',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7623187557906846045),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-1822434345017373307),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(6757911706036214704),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(8202377033370649124),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 88,
				forwards_count : 57,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 49,
				recent_viewers : array(-7817195638961315545),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(35),
		),
	),
	pinned_to_top : array(28),
	chats : array(
		$client->chatEmpty(
			id : -5507134310396146311,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6586149149617306799,
			title : 'zQxH3SGIC7Zetq9F',
			photo : $client->chatPhotoEmpty(),
			participants_count : 89,
			date : 44,
			version : 48,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 44,
			),
		),
		$client->chatForbidden(
			id : 6794002931386191295,
			title : 'M5FyRTPJKabDLCvW',
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
			id : 6438100085641040979,
			access_hash : 4597182785089594346,
			title : 'ocw0kplb1uKdsZ3A',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xhO3DdBaTmRP6F4f',
					reason : 'sPftT4koNwScYn7E',
					text : 'FkSAqXMOUde3faHv',
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
				until_date : 37,
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
				until_date : 5,
			),
			participants_count : 3,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 78,
			color : $client->peerColor(
				color : 89,
				background_emoji_id : -2413925651736247234,
			),
			profile_color : $client->peerColor(
				color : 1,
				background_emoji_id : -9042702651909050656,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 58,
			subscription_until_date : 21,
			bot_verification_icon : -5145984947627000223,
			send_paid_messages_stars : -3257341180647052682,
			linked_monoforum_id : -6675721629906347207,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2388088234248730944,
			access_hash : -9058560653752869264,
			title : 'doELIgYi15kwUurF',
			until_date : 35,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1583321064266521929,
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
			id : 1222133793836998064,
			access_hash : 4439455746516925793,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wrE7SHyQgkdPIxG9',
					reason : 'fJR5KwupVgW6AF4G',
					text : 'ghc5T9ZLG4nMyweE',
				),
			),
			bot_inline_placeholder : '5JTaH7nvjEOD3uq8',
			lang_code : '0zNbL893HoRDX1s6',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 19,
			color : $client->peerColor(
				color : 91,
				background_emoji_id : -8808552161619733490,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : 2396814877295787329,
			),
			bot_active_users : 27,
			bot_verification_icon : -1407914888340589759,
			send_paid_messages_stars : -8517247286589153743,
		),
	),
);
```