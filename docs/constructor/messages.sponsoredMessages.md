# messages.sponsoredMessages

**Description** : *A set of sponsored messages associated to a channel*

**Layer** : 218

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **posts_between** | [`flags.0?int`](type/int) | If set, specifies the minimum number of messages between shown sponsored messages; otherwise, only one sponsored message must be shown after all ordinary messages |
| **start_delay** | [`flags.1?int`](type/int) | For sponsored messages to show on channel videos », the number of seconds to wait before showing the first ad |
| **between_delay** | [`flags.2?int`](type/int) | For sponsored messages to show on channel videos », the number of seconds to wait after the previous ad is hidden, before showing the next ad |
| <mark>messages</mark> | [`Vector<SponsoredMessage>`](type/SponsoredMessage) | Sponsored messages |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the sponsored messages |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the sponsored messages |

---

## Type

[messages.SponsoredMessages](type/messages.SponsoredMessages)

---

## Example

```php
$messagesSponsoredMessages = $client->messages->sponsoredMessages(
	posts_between : 74,
	start_delay : 31,
	between_delay : 37,
	messages : array(
		$client->sponsoredMessage(
			recommended : true,
			can_report : true,
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			url : 'https://docs.liveproto.dev',
			title : 'pzgF9V2rxau45EZY',
			message : 'SlJAhDNgvckEMX2n',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 71,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 65,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 40,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 91,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 52,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 14,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 49,
					language : '9CiXvaB3TOL4j8qs',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 10,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 86,
					user_id : 7585898941538534200,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 62,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 43,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 78,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 94,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 97,
					document_id : -5266538751113438709,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 34,
				),
			),
			photo : $client->photoEmpty(
				id : -6654032346075062581,
			),
			media : $client->messageMediaEmpty(),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -5986102056325636339,
			),
			button_text : 'neZz8f4xphkEblV1',
			sponsor_info : '1Wybf0cnYsNMpEOg',
			additional_info : 'bKcFE0Q7U1H98LlS',
			min_display_duration : 30,
			max_display_duration : 1,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1012557373251464799,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6194246708764418867,
			title : 'Gx3pRh1uJ8gTy7ZW',
			photo : $client->chatPhotoEmpty(),
			participants_count : 47,
			date : 72,
			version : 78,
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
				until_date : 3,
			),
		),
		$client->chatForbidden(
			id : 2688812197812896618,
			title : 'UHRr7wLOl5DIeBGc',
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
			id : 8953040355430761733,
			access_hash : 6073077191278864391,
			title : 'cimtHSEobUQeBNvL',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Fc9pHR6jxJ4N3OZv',
					reason : '12LazkZMdiEyYVX7',
					text : 'ngUIiLx2ZDHec5Sy',
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
				until_date : 32,
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
				until_date : 21,
			),
			participants_count : 34,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 79,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 8410692473873782221,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : -7360335761907809067,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 42,
			subscription_until_date : 42,
			bot_verification_icon : -8708864537750371104,
			send_paid_messages_stars : 5231474623837140657,
			linked_monoforum_id : 2136107616018767694,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7620884073359440164,
			access_hash : 9177578169199109661,
			title : 'kWtoHPRmMGpsxg3q',
			until_date : 35,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3686259220430539975,
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
			id : -6437063557083751702,
			access_hash : -2183802785149050679,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3Zcs051fdJNPwxOh',
					reason : 'TdeshI4cGzAEvoa7',
					text : 'BPFeCY3WZf86HUGR',
				),
			),
			bot_inline_placeholder : 'cPJAX8p0whyYqrHZ',
			lang_code : '1MtC2rwiVRepUH89',
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
				max_id : 21,
			),
			color : $client->peerColor(
				color : 51,
				background_emoji_id : -5027013058929361995,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : 1644143483591491905,
			),
			bot_active_users : 11,
			bot_verification_icon : 4259799393052858742,
			send_paid_messages_stars : 3867329571970566465,
		),
	),
);
```