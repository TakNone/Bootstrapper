# stories.peerStories

**Description** : *Active story list of a specific peer*

**Layer** : 218

```tl
stories.peerStories#cae68768 stories:PeerStories chats:Vector<Chat> users:Vector<User> = stories.PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stories</mark> | [`PeerStories`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.PeerStories](type/stories.PeerStories)

---

## Example

```php
$storiesPeerStories = $client->stories->peerStories(
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 1052200992666737197,
		),
		max_read_id : 99,
		stories : array(
			$client->storyItemDeleted(
				id : 30,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 13,
				date : 26,
				expire_date : 95,
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
				id : 23,
				date : 71,
				from_id : $client->peerUser(
					user_id : -4252673154238265396,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'C7XhTRHu2JvdYbG3',
					story_id : 56,
				),
				expire_date : 34,
				caption : 'OVmEJ7x8ezjK52ZX',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 16,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 6,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 78,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 93,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 30,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 68,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 75,
						language : 'lpVFP5cGmXjMx17S',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 20,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : 4677391793968921847,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 92,
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
						length : 58,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 89,
						document_id : -2157925468963052490,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 33,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'PQvqApCc5V4ald1S',
						address : 'alMNTqfrG8RCo3Dk',
						provider : 'QBlRxDXeLcFNnVvo',
						venue_id : 'fT73VLXeQgIM9tYZ',
						venue_type : '2auCoFj7yhgJpeX9',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 9137483209100906964,
						result_id : 'l5Nhkob2yDsqg7jm',
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
						channel_id : -6484515977277917376,
						msg_id : 95,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(peer : '@LiveProto'),
						msg_id : 97,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : '4C2GEMhbcxTzPf9e',
						temperature_c : 965689.388671875,
						color : 86,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'TBPOjAsbWMLgJzRX',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-8198548212972677883),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-6854109858173392995),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(6978450127197702660),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(7995543292096684973),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 50,
					forwards_count : 58,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 82,
					recent_viewers : array(-8679593680488627693),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(63),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4697628438191450847,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -541672039076667738,
			title : 'ykQnsCW5E4BoiOVY',
			photo : $client->chatPhotoEmpty(),
			participants_count : 59,
			date : 53,
			version : 18,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 94,
			),
		),
		$client->chatForbidden(
			id : 8926051777810464481,
			title : 'Y3oNUBek706nCugL',
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
			id : -8398520526104252605,
			access_hash : -6734814439879329444,
			title : 'umzpPtSbXFMdvwL7',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yvfsN0oUCKIqPinR',
					reason : 'rQpFMdNtajBe43cW',
					text : 'ydGo0emkUqjDzbfS',
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
				until_date : 20,
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
				until_date : 35,
			),
			participants_count : 92,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 1,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 4986599443828982921,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : 2709309027972233596,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 89,
			subscription_until_date : 84,
			bot_verification_icon : 633655791136268534,
			send_paid_messages_stars : -4246685059289845674,
			linked_monoforum_id : 2232436724458730172,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6788147634956080396,
			access_hash : -8366398594575976189,
			title : 'b5BTqkcUFpjLInyH',
			until_date : 0,
		),
	),
	users : array(
		$client->userEmpty(
			id : -188053061286457474,
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
			id : -8600439586079046565,
			access_hash : -2011700881732158917,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Yn1gxrtlARL3vOC6',
					reason : 's6bhkPCgvQuYK5yl',
					text : 'MJWQYaXIztwonrG1',
				),
			),
			bot_inline_placeholder : 'J0qrmfneOFo8GHPv',
			lang_code : 'NI1STCWik8hnuYBl',
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
				max_id : 48,
			),
			color : $client->peerColor(
				color : 54,
				background_emoji_id : -8607817865579414540,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : 7448564317916952276,
			),
			bot_active_users : 89,
			bot_verification_icon : -2474150520248335747,
			send_paid_messages_stars : -6525618336711018557,
		),
	),
);
```