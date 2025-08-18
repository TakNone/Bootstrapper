# updates.channelDifference

**Description** : *The new updates*

**Layer** : 211

```tl
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates to be fetched using getDifference, starting from the provided pts |
| <mark>pts</mark> | [`int`](type/int) | The PTS from which to start getting updates the next time |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed, if the user is currently viewing the chat, see here » for more info |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | New messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | Other updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifference(
	final : true,
	pts : 12,
	timeout : 51,
	new_messages : array(
		$client->messageEmpty(
			id : 56,
			peer_id : $client->peerUser(
				user_id : -7056520972898119619,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 33,
			from_id : $client->peerUser(
				user_id : -9157383339094800040,
			),
			from_boosts_applied : 55,
			peer_id : $client->peerUser(
				user_id : -460035437211239915,
			),
			saved_peer_id : $client->peerUser(
				user_id : 642291147120701551,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'MT2y8ZvHSuqkax6J',
				date : 10,
				channel_post : 35,
				post_author : '5qLn9Jte4Za8RuoU',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 43,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'b3GgI5ZXPtwrvc9x',
				saved_date : 10,
				psa_type : 'pBDz9HWNMg548eRd',
			),
			via_bot_id : 8413845026665349139,
			via_business_bot_id : -6791797800154690814,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 31,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 93,
				quote_text : 'ka0EtGngKN3A4bZc',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 48,
				todo_item_id : 17,
			),
			date : 77,
			message : 'cBUm7eyZ20E4T3Mj',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 89,
					length : 28,
				),
				$client->messageEntityMention(
					offset : 71,
					length : 82,
				),
				$client->messageEntityHashtag(
					offset : 94,
					length : 54,
				),
				$client->messageEntityBotCommand(
					offset : 76,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 21,
					length : 88,
				),
				$client->messageEntityEmail(
					offset : 71,
					length : 28,
				),
				$client->messageEntityBold(
					offset : 47,
					length : 92,
				),
				$client->messageEntityItalic(
					offset : 11,
					length : 23,
				),
				$client->messageEntityCode(
					offset : 22,
					length : 18,
				),
				$client->messageEntityPre(
					offset : 100,
					length : 22,
					language : 'cdSlxwoLZiIAqs3g',
				),
				$client->messageEntityTextUrl(
					offset : 30,
					length : 75,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 71,
					length : 17,
					user_id : 8710319325774864726,
				),
				$client->inputMessageEntityMentionName(
					offset : 58,
					length : 7,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 46,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 52,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 93,
					length : 78,
				),
				$client->messageEntityStrike(
					offset : 21,
					length : 94,
				),
				$client->messageEntityBankCard(
					offset : 6,
					length : 80,
				),
				$client->messageEntitySpoiler(
					offset : 38,
					length : 68,
				),
				$client->messageEntityCustomEmoji(
					offset : 51,
					length : 85,
					document_id : 6790256325877642366,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 34,
					length : 67,
				),
			),
			views : 60,
			forwards : 54,
			replies : $client->messageReplies(
				comments : true,
				replies : 41,
				replies_pts : 61,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 2573492830446659876,
				max_id : 68,
				read_max_id : 47,
			),
			edit_date : 95,
			post_author : '2ouXen6iDQEPYGdM',
			grouped_id : 8386690405273837884,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'joBRYrq9KPel3p1Z',
					reason : 'YG8lciHMvw6sna0r',
					text : 'AZQFvcgXrkbfH0sC',
				),
			),
			ttl_period : 37,
			quick_reply_shortcut_id : 68,
			effect : 2401939228100881051,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'bqpz9FxhQJVt2dSM',
				text : $client->textWithEntities(...),
				hash : -6517595031353809443,
			),
			report_delivery_until_date : 40,
			paid_message_stars : 318892209553139284,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 19,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 91,
			from_id : $client->peerUser(
				user_id : -8802503959103859820,
			),
			peer_id : $client->peerUser(
				user_id : -6009688856993463726,
			),
			saved_peer_id : $client->peerUser(
				user_id : 1550637992591864360,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 78,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 26,
				quote_text : 'xs5EX8Wjf2lizHGO',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 62,
				todo_item_id : 52,
			),
			date : 19,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 66,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(...),
			),
			pts : 38,
			pts_count : 23,
		),
		$client->updateMessageID(
			id : 59,
			random_id : 4783515621845476559,
		),
		$client->updateDeleteMessages(
			messages : array(97),
			pts : 80,
			pts_count : 99,
		),
		$client->updateUserTyping(
			user_id : -5818215495246716711,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 8963723606313072947,
			from_id : $client->peerUser(
				user_id : 4772594572406281736,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 1678659201959681157,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -7240705685388262977,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -1503963954259018942,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : -4771619062196159980,
			date : 46,
			device : 'O9YT6VmfkC27XAjd',
			location : 'wWCc4zyxIAET03F8',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 631793092877434344,
				chat_id : 56,
				date : 64,
				bytes : '\']??LLiveProto`????',
				file : $client->encryptedFileEmpty(...),
			),
			qts : 99,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 72,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 4,
			),
			date : 60,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 99,
			max_date : 63,
			date : 6,
		),
		$client->updateChatParticipantAdd(
			chat_id : 5437747735811126587,
			user_id : 244109565358951357,
			inviter_id : -3305176577520040591,
			date : 11,
			version : 1,
		),
		$client->updateChatParticipantDelete(
			chat_id : 4587195607243213313,
			user_id : 4776711663302110975,
			version : 65,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 74,
					ip_address : '127.0.0.1',
					port : 2,
					secret : '?G3uLiveProto.Ħ?',
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 66,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 94,
			type : 'hXFY1jpbcr7Ziq4Q',
			message : 'YIOxKwi7vsJX1bTq',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 10,
					length : 61,
				),
				$client->messageEntityMention(
					offset : 94,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 71,
					length : 57,
				),
				$client->messageEntityBotCommand(
					offset : 87,
					length : 14,
				),
				$client->messageEntityUrl(
					offset : 72,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 60,
					length : 74,
				),
				$client->messageEntityBold(
					offset : 78,
					length : 55,
				),
				$client->messageEntityItalic(
					offset : 71,
					length : 86,
				),
				$client->messageEntityCode(
					offset : 23,
					length : 64,
				),
				$client->messageEntityPre(
					offset : 96,
					length : 28,
					language : 'LUS6H8QcTwnB5b04',
				),
				$client->messageEntityTextUrl(
					offset : 100,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 99,
					length : 68,
					user_id : -1375139888888168994,
				),
				$client->inputMessageEntityMentionName(
					offset : 25,
					length : 43,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 30,
					length : 9,
				),
				$client->messageEntityCashtag(
					offset : 53,
					length : 39,
				),
				$client->messageEntityUnderline(
					offset : 47,
					length : 82,
				),
				$client->messageEntityStrike(
					offset : 32,
					length : 43,
				),
				$client->messageEntityBankCard(
					offset : 84,
					length : 17,
				),
				$client->messageEntitySpoiler(
					offset : 57,
					length : 83,
				),
				$client->messageEntityCustomEmoji(
					offset : 43,
					length : 6,
					document_id : 4369642228070265213,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 58,
					length : 46,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-6996282309287244274),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-1985164595490189320),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-8706637663517929949),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-3991970814029013760),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 3202071454009406742,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 28,
			peer : $client->peerUser(
				user_id : -234836622802280864,
			),
			max_id : 41,
			still_unread_count : 49,
			pts : 15,
			pts_count : 22,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 8881590174508077012,
			),
			max_id : 8,
			pts : 41,
			pts_count : 94,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -7057791943287128813,
				url : 'https://docs.liveproto.dev',
			),
			pts : 73,
			pts_count : 34,
		),
		$client->updateReadMessagesContents(
			messages : array(64),
			pts : 73,
			pts_count : 35,
			date : 32,
		),
		$client->updateChannelTooLong(
			channel_id : 4174466221623037479,
			pts : 92,
		),
		$client->updateChannel(
			channel_id : -5429934013721532132,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 55,
				peer_id : $client->peerUser(...),
			),
			pts : 56,
			pts_count : 24,
		),
		$client->updateReadChannelInbox(
			folder_id : 61,
			channel_id : 5774662043396631856,
			max_id : 18,
			still_unread_count : 62,
			pts : 64,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -8469414579997753484,
			messages : array(9),
			pts : 75,
			pts_count : 66,
		),
		$client->updateChannelMessageViews(
			channel_id : 191546183115844286,
			id : 76,
			views : 9,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -6226409835107715373,
			user_id : 2618477643682756789,
			is_admin : false,
			version : 40,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(3117254687534274793),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 2362612274502224388,
			user_id : -6475400189643958127,
			query : 'jeK3U2Hgpu6EZ70l',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '3OuHjP21TvYqWdVQ',
		),
		$client->updateBotInlineSend(
			user_id : -1095021516405546881,
			query : 'U3dWcCXfOw5oSB8H',
			geo : $client->geoPointEmpty(),
			id : 'Z4RqVHNjyuXfKEC3',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 10,
				id : 2612049032833224784,
				access_hash : -7637366142712288125,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(...),
			),
			pts : 97,
			pts_count : 24,
		),
		$client->updateBotCallbackQuery(
			query_id : 3367970702089283130,
			user_id : -8939908794291624446,
			peer : $client->peerUser(
				user_id : 4606863355878048027,
			),
			msg_id : 99,
			chat_instance : 931652044212273186,
			data : 'z??!LiveProtoT??H',
			game_short_name : 'dQPAgKHvlUf51Bxw',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 39,
				peer_id : $client->peerUser(...),
			),
			pts : 83,
			pts_count : 66,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -5662478770349454456,
			user_id : -3395300346490867635,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 31,
				id : -1161364537018514005,
				access_hash : 281205541056699233,
			),
			chat_instance : -7608714101307106512,
			data : '?*??LiveProtovA?_?',
			game_short_name : 'I8kdnquriGxJFtL6',
		),
		$client->updateReadChannelOutbox(
			channel_id : 1705518427696079379,
			max_id : 65,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -8541720312349152213,
			),
			top_msg_id : 86,
			saved_peer_id : $client->peerUser(
				user_id : 6706392695210405852,
			),
			draft : $client->draftMessageEmpty(
				date : 85,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 1238985462664709312,
			webpage : $client->webPageEmpty(
				id : 4681159349060350619,
				url : 'https://docs.liveproto.dev',
			),
			pts : 53,
			pts_count : 34,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 65,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 43,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 37,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'sr9zSlYgWHcuKdVB',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -6907151988310953274,
			data : $client->dataJSON(
				data : 'sifmBlHLzTZVbnNE',
			),
			timeout : 52,
		),
		$client->updateBotShippingQuery(
			query_id : -464117197272984187,
			user_id : 7849361369938302726,
			payload : '9?l?3LiveProto???',
			shipping_address : $client->postAddress(
				street_line1 : 'o1LQdjKkFvnbiUrq',
				street_line2 : 'qUrc0CHDpJkZsmzP',
				city : 'E24bGqaYUmcxNHLZ',
				state : 'cPTy82KRMCjEeXon',
				country_iso2 : 'Jsu3X4h6Tx0bCn2z',
				post_code : 'NgrYzFahRSlkjuWo',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -708376683799855097,
			user_id : -773184610331762373,
			payload : 'e	?RCLiveProto???&',
			info : $client->paymentRequestedInfo(
				name : 'rAGw9mdoVuOsItfM',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'oPTBY4Ea9ZbRH8De',
			currency : 'InE0rbhlvgSUJxsN',
			total_amount : -41495028209076079,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -3488893363899382817,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'PkrTwCfYn5VUIyDi',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '5O4tgnGYXZv9fc0o',
				from_version : 3,
				version : 93,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 6376699704357841162,
			top_msg_id : 51,
			saved_peer_id : $client->peerUser(
				user_id : 2109212376134468173,
			),
			messages : array(58),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -489179890344661863,
			available_min_id : 65,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 3049255319359046980,
			),
		),
		$client->updateMessagePoll(
			poll_id : -5136327053971114970,
			poll : $client->poll(
				id : 3331667188272167219,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 79,
				close_date : 86,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 47,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'XY0r1Vb7G4ZvjTM8',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 1959890280829266320,
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
				until_date : 12,
			),
			version : 39,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 96,
				),
			),
			pts : 7,
			pts_count : 64,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -2556559468778715368,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 5,
				request_chat_title : 'x4BX5s3OYd9aGRmy',
				request_chat_date : 51,
				business_bot_id : 5031585371825888758,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -3772821382225667618,
				registration_month : '7lmRx0Ab4ydtXpsF',
				phone_country : '+1234567890',
				name_change_date : 80,
				photo_change_date : 65,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 25,
					distance : 8,
				),
				$client->peerSelfLocated(
					expires : 81,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 4446078736821761292,
			),
			messages : array(67),
			sent_messages : array(3),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 3349820404935276984,
				access_hash : -7927310980080053538,
				slug : 'Yx6D0FIT4EWcA12Q',
				title : 'D3VqMxLGzZ2PEm6k',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'v4rlCZbin1qWFBhR',
				installs_count : 75,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -5898993828319735190,
			),
			msg_id : 13,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 1601759357335246653,
			peer : $client->peerUser(
				user_id : 2569610394280323610,
			),
			options : array('?N?vLiveProto?DH?n'),
			qts : 59,
		),
		$client->updateDialogFilter(
			id : 64,
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
				id : 22,
				title : $client->textWithEntities(...),
				emoticon : '3wRs59gTnfpVKEzi',
				color : 45,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(72),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 3707446787915174090,
			data : '?xd?LiveProtou?C?}',
		),
		$client->updateChannelMessageForwards(
			channel_id : 7306103496244799281,
			id : 56,
			forwards : 21,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -7230534202158470388,
			top_msg_id : 68,
			read_max_id : 100,
			broadcast_id : -1145034867482928992,
			broadcast_post : 89,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 4915607275808826621,
			top_msg_id : 34,
			read_max_id : 50,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 7807828857431894044,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 3462796982100668469,
			top_msg_id : 97,
			from_id : $client->peerUser(
				user_id : -2522883464236910418,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2550419918843855732,
			),
			messages : array(21),
			pts : 54,
			pts_count : 32,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -6581394700624324825,
			messages : array(98),
			pts : 91,
			pts_count : 37,
		),
		$client->updateChat(
			chat_id : -6411770097688600841,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -6862192898917092833,
				access_hash : -114283178982093140,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 90,
					active_date : 6,
					source : 59,
					volume : 83,
					about : 'cXiY13Rn8otFBAzj',
					raise_hand_rating : -8567883775196574792,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 50,
		),
		$client->updateGroupCall(
			chat_id : -8898149310462604109,
			call : $client->groupCallDiscarded(
				id : 4039870999406068494,
				access_hash : -1852607395610135912,
				duration : 77,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -4429515899596808368,
			),
			ttl_period : 69,
		),
		$client->updateChatParticipant(
			chat_id : -425315761075797653,
			date : 47,
			actor_id : 6964414583472370854,
			user_id : 4650350940460065906,
			prev_participant : $client->chatParticipant(
				user_id : 3465141894721133739,
				inviter_id : -4593894894228795267,
				date : 87,
			),
			new_participant : $client->chatParticipant(
				user_id : -409946619538732339,
				inviter_id : -6651085611053052122,
				date : 99,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'KbxQX2OWqN7yVCD8',
				admin_id : 994379537942400248,
				date : 3,
				start_date : 11,
				expire_date : 62,
				usage_limit : 81,
				usage : 76,
				requested : 27,
				subscription_expired : 40,
				title : 'BKAbpTYE94lyCJoH',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 10,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -8919568587297512388,
			date : 45,
			actor_id : -3354561075095809249,
			user_id : 672241882475541417,
			prev_participant : $client->channelParticipant(
				user_id : -6707891146574629306,
				date : 66,
				subscription_until_date : 28,
			),
			new_participant : $client->channelParticipant(
				user_id : -2307588829578832160,
				date : 15,
				subscription_until_date : 86,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'TFcAsEO9UoBdyDHj',
				admin_id : 6328970518239751600,
				date : 87,
				start_date : 9,
				expire_date : 75,
				usage_limit : 23,
				usage : 90,
				requested : 50,
				subscription_expired : 49,
				title : 'ImTCE5dJVgarQB3s',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 86,
		),
		$client->updateBotStopped(
			user_id : 2433404152200373858,
			date : 93,
			stopped : false,
			qts : 59,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'ShzDE3fguVKX7odG',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 4816903361576875112,
			),
			bot_id : -5271171494864184746,
			commands : array(
				$client->botCommand(
					command : '0G5JFA1sZyUprNaw',
					description : 'aQDcJiV1TvS70b5W',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 946249257809508899,
			),
			requests_pending : 51,
			recent_requesters : array(7671853514650596986),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 337664693991372722,
			),
			date : 40,
			user_id : 7987906426589223493,
			about : '3kARq4iWIs2cyxgU',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'fE3ImC5yFMwhadcz',
				admin_id : -1361996769113486170,
				date : 91,
				start_date : 17,
				expire_date : 48,
				usage_limit : 60,
				usage : 72,
				requested : 87,
				subscription_expired : 5,
				title : 'p4tskBOlWHDS07aV',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 6,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -5216805638171340094,
			),
			msg_id : 91,
			top_msg_id : 59,
			saved_peer_id : $client->peerUser(
				user_id : -4863686273175938525,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 9029849159120720775,
		),
		$client->updateBotMenuButton(
			bot_id : -4254762712988807313,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -2461301393395875524,
			),
			msg_id : 39,
			transcription_id : -6301967192861676187,
			text : 'IiceYJxLUFh8dwWS',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 2732615537694153894,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -6629694134847356099,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -7522903411959235286,
			),
			msg_id : 72,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 88,
					h : 23,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 94,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 2571017002055403125,
			topic_id : 77,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 4244169742997454293,
			order : array(31),
		),
		$client->updateUser(
			user_id : -2251630313781241239,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 1560825578217160698,
			),
			story : $client->storyItemDeleted(
				id : 81,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 4022275398735954331,
			),
			max_id : 44,
		),
		$client->updateStoryID(
			id : 21,
			random_id : 2099060211229728971,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 74,
				cooldown_until_date : 15,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -7321559082673816968,
			),
			story_id : 99,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 5572767093534101051,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'LkR3OwJlyejDqaQr',
				user_id : -6912124899732033650,
				giveaway_msg_id : 75,
				date : 4,
				expires : 52,
				used_gift_slug : 'D3BOZzV0qYU6jWuo',
				multiplier : 20,
				stars : -3220943946761570148,
			),
			qts : 29,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 4405748052074624747,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 8465093991921867082,
			),
			wallpaper : $client->wallPaper(
				id : 7883764625531999323,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5089479949179561712,
				slug : 'jgTSitLfC7RaQ2py',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -7642686197818930536,
			),
			msg_id : 36,
			date : 43,
			actor : $client->peerUser(
				user_id : 7301646077418873484,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'V1EwJ3viRan9koNm',
				),
				$client->reactionCustomEmoji(
					document_id : 7947718026590084202,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '7XTW6cgx4ZSnRryt',
				),
				$client->reactionCustomEmoji(
					document_id : -5953053274761417271,
				),
				$client->reactionPaid(),
			),
			qts : 68,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -288159251220240898,
			),
			msg_id : 73,
			date : 74,
			reactions : array(
				$client->reactionCount(
					chosen_order : 60,
					reaction : $client->reactionEmpty(...),
					count : 84,
				),
			),
			qts : 61,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 50,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'xf317lduUwO0cDzy',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 55,
					shortcut : 'ykWLfFNzb2OGmns5',
					top_message : 90,
					count : 1,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 94,
				shortcut : 'y9l1XjQO8NZPBwWA',
				top_message : 69,
				count : 12,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 79,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 87,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 55,
			messages : array(73),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : '0xRe8QkJbAgUoNCh',
				user_id : 4704526585140192520,
				dc_id : 22,
				date : 82,
				rights : $client->businessBotRights(...),
			),
			qts : 79,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'TzIFi2sBfP4lCbkU',
			message : $client->messageEmpty(
				id : 85,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 11,
				peer_id : $client->peerUser(...),
			),
			qts : 58,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'p50ENGozVc21UvZh',
			message : $client->messageEmpty(
				id : 9,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 91,
				peer_id : $client->peerUser(...),
			),
			qts : 48,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'iORA3HbPWVf7jTCc',
			peer : $client->peerUser(
				user_id : -6601417411313253181,
			),
			messages : array(37),
			qts : 11,
		),
		$client->updateNewStoryReaction(
			story_id : 96,
			peer : $client->peerUser(
				user_id : 7533253667074080224,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 1993724753218743431,
				nanos : 83,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -3749429286837718985,
			user_id : 4800294621236530271,
			connection_id : 'Fhvz3qac2wkBtsfE',
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -7247887395819500635,
			data : '?<`h?LiveProto(?>?1',
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 1366707605104533912,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 97,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 735678892895332977,
			payload : '961l8AVreuxRLQbk',
			qts : 70,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 23,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 128999428682465369,
				access_hash : 3756513658349638578,
			),
			sub_chain_id : 72,
			blocks : array('?ʖ?LiveProto񠩤'),
			next_offset : 49,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -612968797124596192,
			saved_peer_id : $client->peerUser(
				user_id : 2718812271613432103,
			),
			read_max_id : 4,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 3416584466581755164,
			saved_peer_id : $client->peerUser(
				user_id : 6935921696762146546,
			),
			read_max_id : 57,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -6876544382231997489,
			saved_peer_id : $client->peerUser(
				user_id : 6324711364740932911,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5546422662993549643,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4024103160778677055,
			title : 'kOf907sAmnRY6qeS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 69,
			date : 5,
			version : 49,
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
				until_date : 73,
			),
		),
		$client->chatForbidden(
			id : 4503384292856776236,
			title : 'iF6wkzySKsMmA5jE',
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
			id : 4145740507326180172,
			access_hash : -1031829746855199148,
			title : 'EvH3FM1BlQJ8DiWj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'izRkMKFxVWaCjPNd',
					reason : 'EwNBgxDqQUIVdmiy',
					text : 'mJFUy6NluoV5i9ec',
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
				until_date : 55,
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
				until_date : 48,
			),
			participants_count : 5,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 66,
			color : $client->peerColor(
				color : 6,
				background_emoji_id : -4618959685298168468,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : 772504648089867445,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 2,
			subscription_until_date : 80,
			bot_verification_icon : 7940094538055168232,
			send_paid_messages_stars : 4225096804654017167,
			linked_monoforum_id : 1565236124364695703,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7860289937681669277,
			access_hash : -6704674592337284947,
			title : '06ZTj9FdMJhOLorf',
			until_date : 63,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5526132608852994870,
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
			id : -5951550459675941455,
			access_hash : 2874050468066163660,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eBrVWysbiL3YCdwo',
					reason : 'iXZCnvAf3pJaqN84',
					text : 'ziyRhlvCcg5mSKGx',
				),
			),
			bot_inline_placeholder : 'BzAEySXHr3dlUKRC',
			lang_code : 'q4pBnWzXCZmOaDy9',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 1,
			color : $client->peerColor(
				color : 27,
				background_emoji_id : 2621150538340824642,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : 6656910175462780594,
			),
			bot_active_users : 79,
			bot_verification_icon : -4307002937376127281,
			send_paid_messages_stars : 3755418383361851977,
		),
	),
);
```