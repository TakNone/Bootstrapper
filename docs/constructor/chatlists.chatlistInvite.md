# chatlists.chatlistInvite

**Description** : *Info about a chat folder deep link »*

**Layer** : 211

```tl
chatlists.chatlistInvite#f10ece2f flags:# title_noanimate:flags.1?true title:TextWithEntities emoticon:flags.0?string peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **title_noanimate** | [`flags.1?true`](type/true) | NOTHING |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Name of the link |
| **emoticon** | [`flags.0?string`](type/string) | Emoji to use as icon for the folder |
| <mark>peers</mark> | [`Vector<Peer>`](type/Peer) | Supergroups and channels to join |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInvite(
	title_noanimate : true,
	title : $client->textWithEntities(
		text : 'D2dGboSx9Ir1TVpi',
		entities : array(
			$client->messageEntityUnknown(
				offset : 42,
				length : 31,
			),
			$client->messageEntityMention(
				offset : 22,
				length : 71,
			),
			$client->messageEntityHashtag(
				offset : 70,
				length : 50,
			),
			$client->messageEntityBotCommand(
				offset : 80,
				length : 85,
			),
			$client->messageEntityUrl(
				offset : 60,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 54,
				length : 51,
			),
			$client->messageEntityBold(
				offset : 47,
				length : 59,
			),
			$client->messageEntityItalic(
				offset : 35,
				length : 52,
			),
			$client->messageEntityCode(
				offset : 38,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 66,
				length : 6,
				language : 'XrcHMF4dfljxKUg3',
			),
			$client->messageEntityTextUrl(
				offset : 26,
				length : 28,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 40,
				length : 79,
				user_id : -4642580835789968429,
			),
			$client->inputMessageEntityMentionName(
				offset : 99,
				length : 67,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 92,
				length : 32,
			),
			$client->messageEntityCashtag(
				offset : 15,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 100,
				length : 1,
			),
			$client->messageEntityStrike(
				offset : 61,
				length : 69,
			),
			$client->messageEntityBankCard(
				offset : 39,
				length : 15,
			),
			$client->messageEntitySpoiler(
				offset : 52,
				length : 98,
			),
			$client->messageEntityCustomEmoji(
				offset : 25,
				length : 8,
				document_id : 1783960122517825170,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 25,
				length : 99,
			),
		),
	),
	emoticon : 'foWIbNGkYmeQUtLl',
	peers : array(
		$client->peerUser(
			user_id : 4777227072671854198,
		),
		$client->peerChat(
			chat_id : -16492935168677379,
		),
		$client->peerChannel(
			channel_id : 7132741482171372470,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6130742284802306136,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6137941877367563055,
			title : 'XIuqbB6TejHLQWvK',
			photo : $client->chatPhotoEmpty(),
			participants_count : 44,
			date : 19,
			version : 73,
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
				until_date : 91,
			),
		),
		$client->chatForbidden(
			id : -2180432671743651791,
			title : 'gtl02TbNnsX7Oh8w',
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
			id : -7387285204094261614,
			access_hash : -376464233889991853,
			title : 'dhmZRXiaWynQuf3J',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 81,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qLdNPpYfvnZix8u9',
					reason : '0vFWl3QKrNnBEbYg',
					text : 'Ck2PhxIuRm8zi9FB',
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
				until_date : 23,
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
				until_date : 33,
			),
			participants_count : 57,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 90,
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 6988661250242060239,
			),
			profile_color : $client->peerColor(
				color : 68,
				background_emoji_id : 1997272907332797041,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 96,
			subscription_until_date : 67,
			bot_verification_icon : -3628901606632391150,
			send_paid_messages_stars : 2441732950830548919,
			linked_monoforum_id : 7823230391160913146,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6046021602340456265,
			access_hash : 9102068667154291344,
			title : 'YNatOXZbxKMdjH6p',
			until_date : 52,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2325343550023214878,
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
			id : 3529417293908304853,
			access_hash : 5765078397513830789,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lCHAx9mGfBvsyNMn',
					reason : 'TZY4VES6CldeRtWB',
					text : 'NgsIeZp6JAfzj1my',
				),
			),
			bot_inline_placeholder : 'rymXORHd54YQfWPN',
			lang_code : '9oceU6pRlbqPZrnV',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 30,
			color : $client->peerColor(
				color : 84,
				background_emoji_id : -9016704219692588907,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : -3244684772979635338,
			),
			bot_active_users : 86,
			bot_verification_icon : -8999594097386998380,
			send_paid_messages_stars : -8995678409576157829,
		),
	),
);
```