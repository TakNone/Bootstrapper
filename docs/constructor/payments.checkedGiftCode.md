# payments.checkedGiftCode

**Description** : *Contains info about a Telegram Premium giftcode link*

**Layer** : 222

```tl
payments.checkedGiftCode#eb983f8f flags:# via_giveaway:flags.2?true from_id:flags.4?Peer giveaway_msg_id:flags.3?int to_id:flags.0?long date:int days:int used_date:flags.1?int chats:Vector<Chat> users:Vector<User> = payments.CheckedGiftCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_giveaway** | [`flags.2?true`](type/true) | Whether this giftcode was created by a giveaway |
| **from_id** | [`flags.4?Peer`](type/Peer) | The peer that created the gift code |
| **giveaway_msg_id** | [`flags.3?int`](type/int) | Message ID of the giveaway in the channel specified in from_id |
| **to_id** | [`flags.0?long`](type/long) | The destination user of the gift |
| <mark>date</mark> | [`int`](type/int) | Creation date of the gift code |
| <mark>days</mark> | [`int`](type/int) | NOTHING |
| **used_date** | [`flags.1?int`](type/int) | When was the giftcode imported, if it was imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[payments.CheckedGiftCode](type/payments.CheckedGiftCode)

---

## Example

```php
$paymentsCheckedGiftCode = $client->payments->checkedGiftCode(
	via_giveaway : true,
	from_id : $client->peerUser(
		user_id : 625827766641215906,
	),
	giveaway_msg_id : 54,
	to_id : 1442799666802811182,
	date : 61,
	days : 24,
	used_date : 89,
	chats : array(
		$client->chatEmpty(
			id : -8542873587881393811,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7769700253024484878,
			title : 'aMSl2qVYeZInryhK',
			photo : $client->chatPhotoEmpty(),
			participants_count : 22,
			date : 95,
			version : 87,
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
				until_date : 34,
			),
		),
		$client->chatForbidden(
			id : -459915897139619843,
			title : 'JmT4z0MdNvyxAUfY',
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
			id : -5608131287590290254,
			access_hash : -1789950241208253927,
			title : 'm4OF0eoG1SakbT6c',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eKsY2mgDc3dqnxjy',
					reason : 'VohcFST3UZXvEK1J',
					text : 'c8fXOMBW90eo6yAm',
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
				until_date : 26,
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
				until_date : 42,
			),
			participants_count : 47,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 47,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : 6820650928324820392,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : -759641118321028190,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 63,
			subscription_until_date : 99,
			bot_verification_icon : -4061903058301335313,
			send_paid_messages_stars : 1784013705037532058,
			linked_monoforum_id : 7569224437680650180,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -1624832990826125058,
			access_hash : 3931310504829874467,
			title : 'AaRrM09ECX7toYGD',
			until_date : 61,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3894547605426839725,
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
			id : -8756199491450439082,
			access_hash : -8337276336588737320,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'URtvfFhwLWTdMJKB',
					reason : 'xtGmVRhb7lrEkST1',
					text : '6KYvZSFjXsf7Vh5l',
				),
			),
			bot_inline_placeholder : 'wahJ0ObqfxpW7Cy2',
			lang_code : 'jeyJ8RcG5tSHqapN',
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
				max_id : 75,
			),
			color : $client->peerColor(
				color : 61,
				background_emoji_id : -4072417702767886080,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : -8207050283000972362,
			),
			bot_active_users : 50,
			bot_verification_icon : 8763193698103424197,
			send_paid_messages_stars : 5817497053178545816,
		),
	),
);
```