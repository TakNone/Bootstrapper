# updates

**Description** : *Full constructor of updates*

**Layer** : 227

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(
					user_id : 1061393475375181408,
				),
			),
			pts : 29,
			pts_count : 21,
		),
		$client->updateMessageID(
			id : 67,
			random_id : -7472709852087774535,
		),
		$client->updateDeleteMessages(
			messages : array(2),
			pts : 63,
			pts_count : 2,
		),
		$client->updateUserTyping(
			user_id : 8388194747785858559,
			top_msg_id : 80,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -2033494135710849632,
			from_id : $client->peerUser(
				user_id : -774367655933475050,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 2234529276575467605,
				self_participant : $client->chatParticipant(
					user_id : -7507690767913260423,
					inviter_id : 7622662867484610442,
					date : 62,
					rank : 'VLOCgThkxp5bwXqM',
				),
			),
		),
		$client->updateUserStatus(
			user_id : -7643896007815546644,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -8449410795705828515,
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
			hash : 0,
			date : 30,
			device : 'Pp7rqeLlhjAO1Y54',
			location : 'lBM5swtQOC43NfGu',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -4616221021718738739,
				chat_id : 99,
				date : 46,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 67,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 91,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 35,
			),
			date : 67,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 73,
			max_date : 78,
			date : 76,
		),
		$client->updateChatParticipantAdd(
			chat_id : 8626984208810724044,
			user_id : 3228901230801541452,
			inviter_id : 8861411533151902792,
			date : 4,
			version : 91,
		),
		$client->updateChatParticipantDelete(
			chat_id : 2355220775299333629,
			user_id : 785108306463913935,
			version : 69,
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
					id : 3,
					ip_address : '127.0.0.1',
					port : 18,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -4367953621338355715,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : false,
				mute_until : 71,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 96,
			type : '6CxF8a5zdtLpfGqy',
			message : 'Cm9Ui3Xt8ZAwuQjv',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 17,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 42,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 38,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 9,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 4,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 12,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 51,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 41,
					language : '2dFf8AEwyPa3qU9j',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 4,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 29,
					user_id : 2933579370669097850,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 66,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 95,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 63,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 12,
					document_id : 1114813582196518831,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 72,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 3,
					date : 64,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 54,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 46,
					old_text : 'ZawCr5hdfbciM0pv',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 90,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-6843383283749226558),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2995170288522567482),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-6220606850688830022),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4678101359555035223),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 4009122918292856274,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 63,
			peer : $client->peerUser(
				user_id : -8481884247259304373,
			),
			top_msg_id : 99,
			max_id : 82,
			still_unread_count : 83,
			pts : 6,
			pts_count : 42,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 1131615751027449824,
			),
			max_id : 3,
			pts : 52,
			pts_count : 46,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -7431211808455916689,
				url : 'https://docs.liveproto.dev',
			),
			pts : 97,
			pts_count : 71,
		),
		$client->updateReadMessagesContents(
			messages : array(13),
			pts : 98,
			pts_count : 11,
			date : 66,
		),
		$client->updateChannelTooLong(
			channel_id : 3728515515039036767,
			pts : 3,
		),
		$client->updateChannel(
			channel_id : -5867051902681446329,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 8,
				peer_id : $client->peerUser(
					user_id : -847082086609571627,
				),
			),
			pts : 16,
			pts_count : 0,
		),
		$client->updateReadChannelInbox(
			folder_id : 54,
			channel_id : 2215461330629774421,
			max_id : 12,
			still_unread_count : 58,
			pts : 71,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 5144274156447476232,
			messages : array(52),
			pts : 75,
			pts_count : 21,
		),
		$client->updateChannelMessageViews(
			channel_id : 3042221038465775984,
			id : 28,
			views : 25,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -4428308261077285320,
			user_id : -8456328235529406832,
			is_admin : true,
			version : 27,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 83,
					id : -6216693124001134346,
					access_hash : 9121086896330651374,
					title : 'OfimZTzArGo0gyY2',
					short_name : 'Nt0kEQ6CXnV3GPvi',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 53,
					thumb_version : 70,
					thumb_document_id : 4182518511497940531,
					count : 53,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'QvYTbJy3X08s9AOC',
						documents : array(-3191702676340339854),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 2942073263503884381,
						keyword : array('PIdojlvYNauH7BU9'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -3778885874759482557,
					),
					$client->document(
						id : -4292921674766671809,
						access_hash : -3644034186161096661,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 78,
						mime_type : 'fyHJ4e9roUcIbYlA',
						size : 4333405360379868032,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 9,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(9134573220492427048),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -862145999584248909,
			user_id : -8798687593399397143,
			query : 'DTrSJHL6zgiUMuqf',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '09aZwkCFvz2AnDEu',
		),
		$client->updateBotInlineSend(
			user_id : -8817246238117507144,
			query : 'AE1tVDRP5mqwabFU',
			geo : $client->geoPointEmpty(),
			id : '5saK9UNkAn4iOL3Z',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 15,
				id : -743043827810646161,
				access_hash : -7585394653264933434,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(
					user_id : 1090854793851204906,
				),
			),
			pts : 86,
			pts_count : 47,
		),
		$client->updateBotCallbackQuery(
			query_id : -4993809849786147832,
			user_id : -1401304571050472190,
			peer : $client->peerUser(
				user_id : 5234230980689245645,
			),
			msg_id : 5,
			chat_instance : 3344502549570157195,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'Tro1tS6WAXwi3ZKV',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 83,
				peer_id : $client->peerUser(
					user_id : -475343114392745593,
				),
			),
			pts : 22,
			pts_count : 38,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -7038971205648465553,
			user_id : 1747245433053555237,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 13,
				id : -8257329177414255632,
				access_hash : 2468123568181073881,
			),
			chat_instance : -4576597023338000074,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '3jS0PxgibCV72BlT',
		),
		$client->updateReadChannelOutbox(
			channel_id : 2562296194572188806,
			max_id : 1,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 3912605004563198308,
			),
			top_msg_id : 74,
			saved_peer_id : $client->peerUser(
				user_id : -4259969709996424253,
			),
			draft : $client->draftMessageEmpty(
				date : 8,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -8275047398622836453,
			webpage : $client->webPageEmpty(
				id : -421379885694594469,
				url : 'https://docs.liveproto.dev',
			),
			pts : 17,
			pts_count : 49,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 67,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 7952859395514394073,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 73,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -6933070012517869786,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 3,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'QycYR1SVaMlLnvXo',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 1990957992671010552,
			data : $client->dataJSON(
				data : '1CK8n0m6Ygj3FWkU',
			),
			timeout : 42,
		),
		$client->updateBotShippingQuery(
			query_id : -3087982112181711695,
			user_id : 8863212856315141889,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'bZjq5wD7p80yJhvi',
				street_line2 : '36ZNM0YuFd9BT7rG',
				city : 'dEyJUAYajkVhGs9c',
				state : 'sUFL65HXmNQw7C3V',
				country_iso2 : 'QMESB7TmFwaWx2hi',
				post_code : 'ZQwiKUOLMmEvd7te',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 3119215166308284267,
			user_id : 8564450644188838996,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'ylebXkLViM6uDnO8',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'H3G91BOk7nhcrDPv',
					street_line2 : 'DuZigTYK7QJsfk2w',
					city : 'bVs8NnO6h2KgTMBu',
					state : 'JWkX3iCmrquPxcyF',
					country_iso2 : 'RfhlGkWd2nNgEvDH',
					post_code : 'jxd7Mk6arQ0gOvbn',
				),
			),
			shipping_option_id : 'rQHcFUoqC0YXenmE',
			currency : 'HiK35MnswPGJcqIo',
			total_amount : 479415316275017597,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 655707910494627635,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '485NyzdBmhsDbZJ1',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'gnxlb3FCciUpdwQ7',
				from_version : 85,
				version : 11,
				strings : array(
					$client->langPackString(
						key : 'RBw92aoxMh7teGc5',
						value : 'Gqi4INWdtkmsROyB',
					),
					$client->langPackStringPluralized(
						key : 'ye0cWMo1NlG5j3RH',
						zero_value : 'LDCeawbSfJIi6QAY',
						one_value : 'tiDydckO4KM2xsj6',
						two_value : 'rREtSaxFPwvngCHJ',
						few_value : 'Lc46BobzWi2NOMAD',
						many_value : '2HeGgcJOPrVzMRKp',
						other_value : 'DrPGjvaXoybZ0NJd',
					),
					$client->langPackStringDeleted(
						key : 'BtORJ6zqSuVPsEm1',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 52325196851452201,
			top_msg_id : 79,
			saved_peer_id : $client->peerUser(
				user_id : -4229045506112513774,
			),
			messages : array(52),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -5491496095603283666,
			available_min_id : 48,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -1984465223186486682,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -3380214893572106455,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : -6717264720929022930,
			),
			msg_id : 29,
			top_msg_id : 50,
			poll_id : -5049167821450880634,
			poll : $client->poll(
				id : -3536129914851066432,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : 'vgRsr6iMlESKId18',
					entities : array(
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 14,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 90,
				close_date : 5,
				countries_iso2 : array('ydr9BORSujTicK7X'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 91,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 32,
				recent_voters : array(
					$client->peerUser(
						user_id : 4541775967359722478,
					),
					$client->peerChat(
						chat_id : 7956869274724138418,
					),
					$client->peerChannel(
						channel_id : 7024199250721188923,
					),
				),
				solution : '5sAGrCWNbm3i1KFZ',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 6,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 86,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 57,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 7,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 73,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 49,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 52,
						language : 'm984SX1HtAMQbEWP',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 42,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : -477968086736954515,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 96,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 3,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 74,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 71,
						document_id : 7382551811101410097,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 94,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 87,
						date : 88,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 24,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 63,
						old_text : 'zFKJuVOEd1S6keRQ',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 36,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 4820276843690020186,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 52,
			),
			version : 21,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -934021586014261402,
					),
					folder_id : 59,
				),
			),
			pts : 73,
			pts_count : 97,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 9047012079649225662,
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
				geo_distance : 3,
				request_chat_title : 'IH29dSWVtTE3ex0m',
				request_chat_date : 25,
				business_bot_id : -4170780555833434528,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 3597852409347485956,
				registration_month : 'bp8a2MfcSvQuI0YN',
				phone_country : '+1234567890',
				name_change_date : 26,
				photo_change_date : 82,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -4983794177900513951,
					),
					expires : 42,
					distance : 91,
				),
				$client->peerSelfLocated(
					expires : 75,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 66,
				peer_id : $client->peerUser(
					user_id : -1956830865110295797,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 5180871816278125381,
			),
			messages : array(86),
			sent_messages : array(45),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 3893173912600834568,
				access_hash : 6202643469754865409,
				slug : 'lY8NneDpyXqITLWj',
				title : 'rTouAz3iJKapUfjR',
				document : $client->documentEmpty(
					id : 2095142228700192356,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 50,
						outbox_accent_color : 69,
						message_colors : array(76),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'ORvX6f4xUGjgZ5FB',
				installs_count : 52,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 8405773516176682061,
			),
			msg_id : 83,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -8527740955514215165,
			peer : $client->peerUser(
				user_id : -2591174570072117350,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(54),
			qts : 9,
		),
		$client->updateDialogFilter(
			id : 28,
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
				id : 64,
				title : $client->textWithEntities(
					text : 'jpeCi8fJ9w2KNZSP',
					entities : array(
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				emoticon : 'KekADpI3Ea0VSWXd',
				color : 47,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(71),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 8299186452072981615,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -7732143348138643201,
			id : 40,
			forwards : 99,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -7318865420913550331,
			top_msg_id : 25,
			read_max_id : 53,
			broadcast_id : 3926360000483660639,
			broadcast_post : 54,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -6618917135021579155,
			top_msg_id : 40,
			read_max_id : 12,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6658676070167268353,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 2791410210906853488,
			top_msg_id : 45,
			from_id : $client->peerUser(
				user_id : 7776256820145651693,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 2197982798019397473,
			),
			messages : array(73),
			pts : 55,
			pts_count : 94,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 8760052702402374293,
			messages : array(50),
			pts : 12,
			pts_count : 24,
		),
		$client->updateChat(
			chat_id : 8306108553347732759,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -6725746635012399430,
				access_hash : -4294878193285238912,
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
					peer : $client->peerUser(
						user_id : 2801772633396220377,
					),
					date : 67,
					active_date : 5,
					source : 52,
					volume : 26,
					about : 'hOwVGFdebla3J56U',
					raise_hand_rating : 999555844266932943,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'u9t8o6VrzhZsfvQd',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 1,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'SWQECsB6IxFt2UD8',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 32,
					),
					paid_stars_total : 7984014738574812322,
				),
			),
			version : 99,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 5916423363039434301,
			),
			call : $client->groupCallDiscarded(
				id : -2396176342064638136,
				access_hash : 2149944521200255629,
				duration : 74,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 6932148005482969713,
			),
			ttl_period : 45,
		),
		$client->updateChatParticipant(
			chat_id : -4443986779535024056,
			date : 9,
			actor_id : -6402158806531310108,
			user_id : -8811353963762833386,
			prev_participant : $client->chatParticipant(
				user_id : 7266906467254492071,
				inviter_id : 2642542690412562862,
				date : 23,
				rank : 'HckR3LiY9FK4ClEf',
			),
			new_participant : $client->chatParticipant(
				user_id : 4687796927093107798,
				inviter_id : 8854131104022022606,
				date : 72,
				rank : 'RVnjoTkpUgGCQ2hJ',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'NLySrhW8TaJQe1jG',
				admin_id : -7150479399572192013,
				date : 16,
				start_date : 70,
				expire_date : 60,
				usage_limit : 83,
				usage : 7,
				requested : 28,
				subscription_expired : 4,
				title : 'hqH9a4nNrUCIM23J',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 75,
					amount : 3218860643029816540,
				),
			),
			qts : 3,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -6297411684309227563,
			date : 73,
			actor_id : -4775682471945504486,
			user_id : 589740037183306313,
			prev_participant : $client->channelParticipant(
				user_id : -5918008254357272624,
				date : 75,
				subscription_until_date : 67,
				rank : 'cWozJVrAbDNkOiyj',
			),
			new_participant : $client->channelParticipant(
				user_id : -7975378716450627120,
				date : 92,
				subscription_until_date : 21,
				rank : 'DM5d1uxf0qgBmb8P',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'K8GnCxzsHmLp397i',
				admin_id : -1837392675207584844,
				date : 54,
				start_date : 75,
				expire_date : 42,
				usage_limit : 58,
				usage : 31,
				requested : 41,
				subscription_expired : 73,
				title : '3l1EC5m7UWY4kuHn',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 11,
					amount : 6757311018782509223,
				),
			),
			qts : 44,
		),
		$client->updateBotStopped(
			user_id : 646745094455586712,
			date : 58,
			stopped : true,
			qts : 95,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'HeqxhBF3VnUvKNkt',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 6417193108394745136,
			),
			bot_id : 2914225601711593779,
			commands : array(
				$client->botCommand(
					command : 'Qbkw9XcGCFTmyt71',
					description : '4cb5PEFYX3NJjkot',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -8438745213449260687,
			),
			requests_pending : 35,
			recent_requesters : array(2336267036143090792),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 5873184397568897562,
			),
			date : 27,
			user_id : -739884857371599704,
			about : 'wZBXWnGh5xdeuKPU',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'ozQf3P15Wx04Tgnt',
				admin_id : 6893685425018270068,
				date : 95,
				start_date : 63,
				expire_date : 52,
				usage_limit : 1,
				usage : 21,
				requested : 36,
				subscription_expired : 88,
				title : 'kxaftu7vIzGsdpAU',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 69,
					amount : 301488574588456931,
				),
			),
			qts : 15,
			query_id : -4157364791751603671,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -8922302342106157370,
			),
			msg_id : 94,
			top_msg_id : 21,
			saved_peer_id : $client->peerUser(
				user_id : 2888851409662652008,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 48,
						reaction : $client->reactionEmpty(...),
						count : 69,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 14,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 72,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 8200555482637668908,
		),
		$client->updateBotMenuButton(
			bot_id : 8977112944781283884,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 2046584812038745781,
			),
			msg_id : 42,
			transcription_id : -2086103729789428924,
			text : 'peIJ15w6tbR2msaq',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -8091052357595931076,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 6973476026095460374,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 5208969234775459358,
			),
			msg_id : 39,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 78,
					h : 77,
					thumb : $client->photoSizeEmpty(
						type : 'tMOJYrqRmUpHSzWo',
					),
					video_duration : 32,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -2579060451732982046,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 1063078611844847672,
			),
			story : $client->storyItemDeleted(
				id : 57,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -9219266312731984259,
			),
			max_id : 89,
		),
		$client->updateStoryID(
			id : 83,
			random_id : -4210040223990849631,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 8,
				cooldown_until_date : 33,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -1922013843153498196,
			),
			story_id : 96,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 7952050494298997051,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'NjG1m9iKW6IXoEQ8',
				user_id : 5872616794427296518,
				giveaway_msg_id : 53,
				date : 25,
				expires : 34,
				used_gift_slug : 'fp39L2VF6Za8SXrJ',
				multiplier : 91,
				stars : 1272828093414096584,
			),
			qts : 42,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 3430017367803291881,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -4375346454207250398,
			),
			wallpaper : $client->wallPaper(
				id : 4309247024665125317,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -5893901833051603333,
				slug : 'sRo8vtAcGFefmIPD',
				document : $client->documentEmpty(
					id : 557610963385433271,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 33,
					second_background_color : 28,
					third_background_color : 10,
					fourth_background_color : 91,
					intensity : 1,
					rotation : 65,
					emoticon : 'Ai7dQZSbWY8Iznsu',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 6357965263825735665,
			),
			msg_id : 64,
			date : 74,
			actor : $client->peerUser(
				user_id : 8205614212744914092,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'mELK1hbRszc6OiGl',
				),
				$client->reactionCustomEmoji(
					document_id : 2885339985912891816,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'bCFRxumKSfqVzYeZ',
				),
				$client->reactionCustomEmoji(
					document_id : -6498460723908090518,
				),
				$client->reactionPaid(),
			),
			qts : 74,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 5676778741270124708,
			),
			msg_id : 32,
			date : 42,
			reactions : array(
				$client->reactionCount(
					chosen_order : 45,
					reaction : $client->reactionEmpty(),
					count : 46,
				),
			),
			qts : 55,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -5918082393886999871,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -5128918311302664196,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 89,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'wPsJIYBrgCzWx8Oq',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 22,
					shortcut : 'm6Vy0jhTANIuZl2K',
					top_message : 44,
					count : 65,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 86,
				shortcut : 'rCX5mYs0QiUREhDn',
				top_message : 0,
				count : 9,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 8,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(
					user_id : -1285926614889937559,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 86,
			messages : array(3),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'StvWHCLy29T8xuAe',
				user_id : -5743082389204107482,
				dc_id : 69,
				date : 84,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 8,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'H7OEoMjiwrWUsn8y',
			message : $client->messageEmpty(
				id : 72,
				peer_id : $client->peerUser(
					user_id : 7653165041689916164,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(
					user_id : -8291886854729307768,
				),
			),
			qts : 89,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'QbtUkI82Aj4lshwY',
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(
					user_id : 2456687477209784065,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 7,
				peer_id : $client->peerUser(
					user_id : -3376357528900638496,
				),
			),
			qts : 56,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'IZG9Wgp2MzLDhs7k',
			peer : $client->peerUser(
				user_id : 1274429260280240622,
			),
			messages : array(51),
			qts : 97,
		),
		$client->updateNewStoryReaction(
			story_id : 86,
			peer : $client->peerUser(
				user_id : -475558977068600644,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 6108758602421152366,
				nanos : 57,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 4163777472942136242,
			user_id : 7613389987069654803,
			connection_id : 'Cmh0elHaU4zXVuP1',
			message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(
					user_id : -5315875763340322345,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 68,
				peer_id : $client->peerUser(
					user_id : -7390287423966403033,
				),
			),
			chat_instance : 3510283201482980146,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 7825335720516037628,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 490268353511677860,
					nanos : 41,
				),
				available_balance : $client->starsAmount(
					amount : -1462142522312519948,
					nanos : 43,
				),
				overall_revenue : $client->starsAmount(
					amount : -3396032601661776417,
					nanos : 54,
				),
				next_withdrawal_at : 64,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 8349149238674446150,
			payload : 'wq1vzigapnCxkQM0',
			qts : 81,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 51,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 67,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -8072715461796127109,
				access_hash : -3443297984160145274,
			),
			sub_chain_id : 21,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 53,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -5680605782714909618,
			saved_peer_id : $client->peerUser(
				user_id : -1193856504902250760,
			),
			read_max_id : 77,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -6155232689781195050,
			saved_peer_id : $client->peerUser(
				user_id : -7126752960894684585,
			),
			read_max_id : 3,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -5812251532861110125,
			saved_peer_id : $client->peerUser(
				user_id : -8877295925755122984,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 9174625988582493258,
				access_hash : 8509272087141164259,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 11,
				from_id : $client->peerUser(
					user_id : 5080283894397296090,
				),
				date : 91,
				message : $client->textWithEntities(
					text : 'b8JRW27SwEaZiLyK',
					entities : array(
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				paid_message_stars : 4921208383843017257,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -1481320623856269711,
				access_hash : -3422986579908332992,
			),
			from_id : $client->peerUser(
				user_id : 6211178129645344920,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 8364650503156612734,
			),
			topic_id : 48,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 5635708694882645988,
			),
			order : array(65),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -761127058669498923,
				access_hash : -8554252879000427590,
			),
			messages : array(85),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -3731948129056501133,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -8282186061205819054,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -7796245312713675801,
				bid_date : 93,
				min_bid_amount : 1872185478503982021,
				bid_peer : $client->peerUser(
					user_id : -1844402197397931465,
				),
				acquired_count : 19,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : -8749669997402118293,
			user_id : 2392142063911014396,
			rank : 'JQVIqKnBMduEZRPC',
			version : 73,
		),
		$client->updateManagedBot(
			user_id : -7316037967530937020,
			bot_id : 6544217816601040339,
			qts : 25,
		),
		$client->updateBotGuestChatQuery(
			query_id : 7427824710167050408,
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : -3769858193393609984,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 50,
					peer_id : $client->peerUser(
						user_id : 7821890526621824284,
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
					id : 95,
					from_id : $client->peerUser(
						user_id : -2253569878112295373,
					),
					from_boosts_applied : 58,
					from_rank : 'fMhsLCBmlZRqVWi8',
					peer_id : $client->peerUser(
						user_id : 3035150069031153640,
					),
					saved_peer_id : $client->peerUser(
						user_id : 6040549266040498838,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : 'tnpBHx2IdKLvbTo9',
						date : 33,
						channel_post : 6,
						post_author : 'Os3K1i8pdxTXbP4c',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 23,
						saved_from_id : $client->peerUser(...),
						saved_from_name : 'eQIC3PpvwcjVG6Th',
						saved_date : 52,
						psa_type : 'nqOjr3As1K6vZWGT',
					),
					via_bot_id : 5335311532635642767,
					via_business_bot_id : -902109566133069449,
					guestchat_via_from : $client->peerUser(
						user_id : -7844090892829286864,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_ephemeral : true,
						reply_to_msg_id : 39,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 70,
						quote_text : '8YxjyaZBIWKiLPlA',
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 13,
						todo_item_id : 30,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 19,
					message : '8VoPk5icx9Gy63wE',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 54,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 28,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 3,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 99,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 13,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 64,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 96,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 84,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 40,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 17,
							language : 'sRLlEdA2ZNunfG7q',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 54,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 74,
							user_id : 3168229012832409079,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 0,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 71,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 22,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 5,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 61,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 4,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 78,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 37,
							document_id : -3782458280637236511,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 91,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 89,
							date : 66,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 51,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 59,
							old_text : 'LanxgjQvSIAVzreb',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 89,
						),
					),
					views : 80,
					forwards : 83,
					replies : $client->messageReplies(
						comments : true,
						replies : 85,
						replies_pts : 8,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : -7816636830991810960,
						max_id : 33,
						read_max_id : 97,
					),
					edit_date : 33,
					post_author : '5DIMVAJ1Pdt0xm2K',
					grouped_id : 6892373995645697063,
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
							platform : '3hBvHm0Gd9ligke7',
							reason : 'aE9DVktMPdzAbZup',
							text : 'ujJdV9iHNn3FQ6BR',
						),
					),
					ttl_period : 18,
					quick_reply_shortcut_id : 78,
					effect : 6611379122869854325,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'DCpJgyam1VFTbrBv',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 52,
					paid_message_stars : 2336206210630926446,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 49,
					),
					schedule_repeat_period : 39,
					summary_from_language : 'a153qDjNELwGOtv8',
					rich_message : $client->richMessage(
						rtl : true,
						part : true,
						blocks : array(
							$client->pageBlockUnsupported(...),
							$client->pageBlockTitle(...),
							$client->pageBlockSubtitle(...),
							$client->pageBlockAuthorDate(...),
							$client->pageBlockHeader(...),
							$client->pageBlockSubheader(...),
							$client->pageBlockParagraph(...),
							$client->pageBlockPreformatted(...),
							$client->pageBlockFooter(...),
							$client->pageBlockDivider(...),
							$client->pageBlockAnchor(...),
							$client->pageBlockList(...),
							$client->pageBlockBlockquote(...),
							$client->pageBlockPullquote(...),
							$client->pageBlockPhoto(...),
							$client->pageBlockVideo(...),
							$client->pageBlockCover(...),
							$client->pageBlockEmbed(...),
							$client->pageBlockEmbedPost(...),
							$client->pageBlockCollage(...),
							$client->pageBlockSlideshow(...),
							$client->pageBlockChannel(...),
							$client->pageBlockAudio(...),
							$client->pageBlockKicker(...),
							$client->pageBlockTable(...),
							$client->pageBlockOrderedList(...),
							$client->pageBlockDetails(...),
							$client->pageBlockRelatedArticles(...),
							$client->pageBlockMap(...),
							$client->pageBlockHeading1(...),
							$client->pageBlockHeading2(...),
							$client->pageBlockHeading3(...),
							$client->pageBlockHeading4(...),
							$client->pageBlockHeading5(...),
							$client->pageBlockHeading6(...),
							$client->pageBlockMath(...),
							$client->pageBlockThinking(...),
							$client->inputPageBlockMap(...),
							$client->pageBlockBlockquoteBlocks(...),
						),
						photos : array(
							$client->photoEmpty(...),
							$client->photo(...),
						),
						documents : array(
							$client->documentEmpty(...),
							$client->document(...),
						),
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
					id : 86,
					from_id : $client->peerUser(
						user_id : 1711989894800479102,
					),
					peer_id : $client->peerUser(
						user_id : -6088329984291798631,
					),
					saved_peer_id : $client->peerUser(
						user_id : 3970656054390024104,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_ephemeral : true,
						reply_to_msg_id : 61,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 25,
						quote_text : 'FohyK7d80GUegtn1',
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 49,
						todo_item_id : 100,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 73,
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
					ttl_period : 90,
				),
			),
			qts : 19,
		),
		$client->updateAiComposeTones(),
		$client->updateJoinChatWebViewDecision(
			peer : $client->peerUser(
				user_id : -1154703221174068164,
			),
			query_id : -8983849565731699042,
			result : $client->joinChatBotResultApproved(),
		),
		$client->updateNewBotConnection(
			confirmed : true,
			bot_id : 6264098372362495624,
			date : 49,
			device : 'PsJ9i8UAm1XDhBeY',
			location : 'qBbAQcx905dIH8Ww',
		),
		$client->updateWebBrowserSettings(
			open_external_browser : true,
			display_close_button : true,
		),
		$client->updateWebBrowserException(
			delete : true,
			open_external_browser : true,
			exception : $client->webDomainException(
				domain : 'mvgO50jVIAfnLDCb',
				url : 'https://docs.liveproto.dev',
				title : 'ghbJs5TXtG9z8vUZ',
				favicon : 9200944518476866929,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 1819265388298116140,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : -2307831826130817713,
			access_hash : 4446643193759380071,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'b2a7lqGELiSpuTOc',
					reason : 'vcog9VhZetDRSzbF',
					text : 'hqmvMXbYwFZf30eA',
				),
			),
			bot_inline_placeholder : 'hUKg5YdJu87G0CmA',
			lang_code : 'Iqk3Dx1Wsl2aPod5',
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
				max_id : 62,
			),
			color : $client->peerColor(
				color : 22,
				background_emoji_id : -5654004242915224688,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : 2796810806885429836,
			),
			bot_active_users : 40,
			bot_verification_icon : -2437130906529460425,
			send_paid_messages_stars : -6687430463417453612,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -535345521522522910,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4778041246521864650,
			title : 'dAtnJXehqa4mOGSK',
			photo : $client->chatPhotoEmpty(),
			participants_count : 60,
			date : 94,
			version : 95,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 69,
			),
		),
		$client->chatForbidden(
			id : 243651259079327644,
			title : 'YI8dpQSf5rwzyJAs',
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
			id : 1077706451849856318,
			access_hash : -8991866664937524942,
			title : '2KEbROkaUpm8Hq5u',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'e1EbjsCQZ2fgi6NF',
					reason : 'mX81pBYWybDS0Ael',
					text : 'KuJzVbtihanXByIA',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 19,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 94,
			),
			participants_count : 97,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 50,
			),
			color : $client->peerColor(
				color : 1,
				background_emoji_id : -5015638123978044780,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : 393863690188925686,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 66,
			subscription_until_date : 76,
			bot_verification_icon : -9087499033067202409,
			send_paid_messages_stars : 2582295627535322143,
			linked_monoforum_id : -8197814696566027885,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 3384132267946426945,
			access_hash : 2467233828663285490,
			title : 'Q69grZCGxU4zaYlb',
			until_date : 35,
		),
	),
	date : 31,
	seq : 96,
);
```